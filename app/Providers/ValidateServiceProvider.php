<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\ValidateService;

class ValidateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ValidateService::class, function ($app) {
            return new ValidateService();
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
