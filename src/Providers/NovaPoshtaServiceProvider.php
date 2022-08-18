<?php

namespace Golliaphuth\NovaPoshta\Providers;

use Golliaphuth\NovaPoshta\Console\Commands\NPAreasImportCommand;
use Illuminate\Support\Facades\Artisan;
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
            $this->commands([
                NPAreasImportCommand::class,
            ]);
        }
    }
}
