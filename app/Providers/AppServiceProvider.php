<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\EloquentDevelopmentModel;
use App\Contracts\DevelopmentServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
    ];

    public array $singletons = [
        DevelopmentServiceInterface::class => EloquentDevelopmentModel::class,
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
