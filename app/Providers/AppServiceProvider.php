<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EloquentDevelopmentService;
use App\Contracts\DevelopmentServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
    ];

    public array $singletons = [
        DevelopmentServiceInterface::class => EloquentDevelopmentService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
