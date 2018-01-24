<?php namespace davis\animatedtag;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddClientAssets::class);
    $events->subscribe(Listener\AddApiAttributes::class);
    $events->subscribe(Listener\AddDependancies::class);
};
