<?php

namespace App\Providers;

use App\Infrastructure\Repository\GlampingRepository;
use Illuminate\Support\ServiceProvider;

class GlampingRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(GlampingRepository::class, function ($app) {
            return new GlampingRepository();
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
