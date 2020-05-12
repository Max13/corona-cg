<?php

namespace App\Listeners;

use Exception;
use TightenCo\Jigsaw\Jigsaw;
use Zttp\Zttp;

class CheckFacebookPageCredentials
{
    protected $facebook;

    /**
     * Check page access token
     *
     * @param  string $accessToken Facebook access token
     * @return bool
     */
    public function checkPageToken($accessToken)
    {
        $pageMeta = Zttp::get("{$this->facebook->baseApi}/me", [
            'access_token' => $accessToken,
        ]);
        $pageData = $pageMeta->json();

        if ($pageMeta->isOk() && $pageData['id'] == $this->facebook->pageId) {
            return true;
        }

        echo $pageData['error']['message'].PHP_EOL;
        return false;
    }

    /**
     * Check user access token
     *
     * @param  string $accessToken Facebook access token
     * @return bool
     */
    public function checkUserToken($accessToken)
    {
        $userMeta = Zttp::get("{$this->facebook->baseApi}/me", [
            'access_token' => $accessToken
        ]);
        $userData = $userMeta->json();

        if ($userMeta->isOk() && $userData['id'] != $this->facebook->pageId) {
            return true;
        }

        echo $userData['error']['message'].PHP_EOL;
        return false;
    }

    /**
     * Login user on a device
     *
     * @param  string      $accessToken Facebook access token, in the form
     *                                  app_id|client_token
     * @return bool|string              Short-lived access_token,
     *                                  false on error
     */
    public function loginUser($accessToken)
    {
        $loginMeta = Zttp::post("{$this->facebook->baseApi}/device/login", [
            'access_token' => $accessToken,
            'scope' => $this->facebook->permissions->join(','),
        ]);
        $loginData = $loginMeta->json();

        throw_if(!$loginMeta->isOk(), Exception::class, $loginData['error']['message']);

        echo sprintf(
            'Log-in to %s withing the next %d min, with the code: %s'.PHP_EOL.PHP_EOL,
            $loginData['verification_uri'],
            $loginData['expires_in'] / 60,
            $loginData['user_code']
        );

        try {
            return retry(
                $loginData['expires_in'] / $loginData['interval'],
                function () use ($accessToken, $loginData) {
                    echo 'Checking... ';

                    $check = Zttp::post("{$this->facebook->baseApi}/device/login_status", [
                       'access_token' => $accessToken,
                       'code' => $loginData['code'],
                    ]);
                    $checkData = $check->json();

                    // Probably a request error, or a permanent error
                    // Pending login error_subcode: 1349174
                    if (
                           !$check->isOk()
                        || (
                               isset($checkData['error'])
                            && $checkData['error']['error_subcode'] !== 1349174
                        )
                    ) {
                        echo $checkData['error']['message'].PHP_EOL;
                        return false;
                    // Login successful
                    } elseif (isset($checkData['access_token'])) {
                        echo 'OK'.PHP_EOL;
                        return $checkData['access_token'];
                    }

                    echo PHP_EOL;
                    throw new Exception;
                },
                $loginData['interval'] * 1000
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    /**
     * Get Long-lived access token
     *
     * @param  string      $accessToken Facebook Short-lived access token
     * @return bool|string              Long-lived access_token
     */
    public function getLongLivedAccessToken($accessToken)
    {
        $tokenMeta = Zttp::get("{$this->facebook->baseApi}/oauth/access_token", [
            'client_id' => $this->facebook->appId,
            'client_secret' => $this->facebook->appSecret,
            'fb_exchange_token' => $accessToken,
            'grant_type' => 'fb_exchange_token',
        ]);
        $tokenData = $tokenMeta->json();

        if ($tokenMeta->isOk() && isset($tokenData['access_token'])) {
            return $tokenData['access_token'];
        }

        echo $tokenData['error']['message'].PHP_EOL;
        return false;
    }

    /**
     * Get page access token
     *
     * @param  string      $accessToken Facebook Long-lived access token
     * @return bool|string              Page access_token
     */
    public function getPageAccessToken($accessToken)
    {
        $tokenMeta = Zttp::get("{$this->facebook->baseApi}/me/accounts", [
            'access_token' => $accessToken,
        ]);
        $tokenData = $tokenMeta->json();

        if ($tokenMeta->isOk() && count($tokenData['data'])) {
            foreach ($tokenData['data'] as $page) {
                if ($page['id'] == $this->facebook->pageId) {
                    if (!in_array('CREATE_CONTENT', $page['tasks'])) {
                        echo 'CREATE_CONTENT permission not available';
                        return false;
                    }

                    return $page['access_token'];
                }
            }
        }

        echo $tokenData['error']['message'].PHP_EOL;
        return false;
    }

    public function handle(Jigsaw $jigsaw)
    {
        $this->facebook = $jigsaw->getConfig('facebook');

        echo 'Checking Page access_token: ';
        if ($this->checkPageToken($this->facebook->pageToken)) {
            echo 'OK'.PHP_EOL;
        } else {
            echo 'Invalid'.PHP_EOL;
            echo 'Checking User access_token: ';

            if ($this->checkUserToken($this->facebook->userToken)) {
                echo 'OK'.PHP_EOL;
            } else {
                echo 'Facebook Login – ';

                $shortToken = $this->loginUser($this->facebook->appId.'|'.$this->facebook->clientToken);

                if ($shortToken) {
                    echo 'Getting Long-lived access_token: ';

                    $longToken = $this->getLongLivedAccessToken($shortToken);

                    if ($longToken) {
                        echo $longToken.PHP_EOL;

                        $this->facebook['userToken'] = $longToken;
                    } else {
                        echo 'Error'.PHP_EOL;
                        throw new Exception("Couldn't get Long-lived access_token");
                    }
                } else {
                    echo 'Error'.PHP_EOL;
                    throw new Exception("Couldn't login to Facebook");
                }
            }

            echo 'Retrieving Page access_token: ';

            $pageToken = $this->getPageAccessToken($this->facebook->userToken);

            if ($pageToken) {
                echo $pageToken.PHP_EOL;

                $this->facebook['pageToken'] = $pageToken;
            } else {
                echo 'Error'.PHP_EOL;
                throw new Exception("Couldn't get Page access_token");
            }
        }

        echo PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL;
    }

}
