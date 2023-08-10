<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\ScheduleService;

class ScheduleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ScheduleService::class, function ($app) {
            return new ScheduleService();
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
