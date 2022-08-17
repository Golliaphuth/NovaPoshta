<?php

namespace Golliaphuth\NovaPoshta\Providers;

use Illuminate\Support\ServiceProvider;

class NovaPoshtaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
            $this->publishes([
                __DIR__ . '/../../config/nova_poshta.php' => config_path('nova_poshta.php'),
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}
