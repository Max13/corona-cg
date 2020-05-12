<?php

namespace App\Listeners;

use Exception;
use TightenCo\Jigsaw\Jigsaw;
use Zttp\Zttp;

class PostUpdateToFacebookPage
{
    protected $facebook;

    public function handle(Jigsaw $jigsaw)
    {
        $facebook = $jigsaw->getConfig('facebook');
        $counters = $jigsaw->getConfig('counters');
        $lastDate = $jigsaw->getConfig('official_statements.0.date')
                           ->formatLocalized('%d %B %Y');
        $message = sprintf(
            "Dernier bilan du %s en République du Congo: %d cas confirmés, %d guéris et %d décès. Plus de détails sur %s. #ChezMoiAuCongo #RestezChezVous #SauvonsDesVies #COVID19_CG",
            $lastDate,
            $counters->confirmed->n,
            $counters->recovered->n,
            $counters->deceased->n,
            $jigsaw->getConfig('baseUrl')
        );

        $postMeta = Zttp::post("{$facebook->baseApi}/{$facebook->pageId}/feed", [
            'access_token' => $facebook->pageToken,
            'message' => $message,
        ]);

        throw_if(
            !$postMeta->isOk(),
            Exception::class,
            $postMeta->json()['error']['message']
        );
    }
}
