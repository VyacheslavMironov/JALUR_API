<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\TypeWorkoutsService;

class TypeWorkoutsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(TypeWorkoutsService::class, function ($app) {
            return new TypeWorkoutsService();
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
