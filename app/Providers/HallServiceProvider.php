<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\HallService;

class HallServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(HallService::class, function ($app) {
            return new HallService();
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
