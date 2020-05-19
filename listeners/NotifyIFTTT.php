<?php

namespace App\Listeners;

use Exception;
use TightenCo\Jigsaw\Jigsaw;
use Zttp\Zttp;

class NotifyIFTTT
{
    public function handle(Jigsaw $jigsaw)
    {
        if ($jigsaw->getEnvironment() !== 'production') {
            return;
        }

        $ifttt = $jigsaw->getConfig('ifttt');
        $apiUrl = str_replace(
            ['{event}', '{key}'],
            [$ifttt->event, $ifttt->key],
            $ifttt->baseApi
        );
        $counters = $jigsaw->getConfig('counters');
        $lastDate = $jigsaw->getConfig('official_statements.0.date')
                           ->formatLocalized('%d %B %Y');
        $message = sprintf(
            "Dernier bilan du %s en République du Congo 🇨🇬: %d cas confirmés, %d guéris et %d décès.<br><br>Plus de détails sur %s.<br><br>#ChezMoiAuCongo #RestezChezVous #SauvonsDesVies #COVID19_CG",
            $lastDate,
            $counters->confirmed->n,
            $counters->recovered->n,
            $counters->deceased->n,
            $jigsaw->getConfig('baseUrl')
        );

        $notify = Zttp::post($apiUrl, [
            'value1' => $message,
        ]);

        throw_if(
            !$notify->isOk(),
            Exception::class,
            $notify->json()['error']['message']
        );
    }
}
