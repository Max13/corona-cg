<?php

use Carbon\Carbon;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

date_default_timezone_set('Africa/Brazzaville');
setlocale(LC_TIME, ['fr_FR.UTF-8', 'fr_FR']);
Carbon::setLocale('fr');

$events->afterBuild(App\Listeners\NotifyIFTTT::class);
