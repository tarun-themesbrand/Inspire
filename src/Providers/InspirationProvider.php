<?php

namespace Tarun\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/Http/Controllers' => app_path('Controllers/tarun_tb'),
            ], 'controllers');
        }
    }
}
