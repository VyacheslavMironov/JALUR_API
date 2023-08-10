<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\HistoryWorkoutsService;

class HistoryWorkoutsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(HistoryWorkoutsService::class, function ($app) {
            return new HistoryWorkoutsService();
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
