<?php

namespace MohamedFayez\Bitly;

use Illuminate\Support\ServiceProvider;

class BitlyServicesProvider extends ServiceProvider
{

    public function boot()
    {
        $this->bublishes([
            __DIR__.'/config/bitlyConfig.php' => config_path('bitlyConfig.php'),
        ],['bitlyConfig']);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/bitlyConfig.php' , 'bitlyConfig.php'
        );
    }

}