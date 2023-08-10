<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\RecordsService;

class RecordsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RecordsService::class, function ($app) {
            return new RecordsService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
