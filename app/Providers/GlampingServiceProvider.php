<?php

namespace App\Providers;

use App\Domain\Service\GlampingService;
use App\Infrastructure\Repository\GlampingRepository;
use Illuminate\Support\ServiceProvider;

class GlampingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(GlampingService::class, function ($app) {
            return new GlampingService($app->make(GlampingRepository::class));
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
