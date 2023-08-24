<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\ScheduleTimeService;

class ScheduleTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ScheduleTimeService::class, function ($app) {
            return new ScheduleTimeService();
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
