<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\WorkoutService;

class WorkoutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(WorkoutService::class, function ($app) {
            return new WorkoutService();
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
