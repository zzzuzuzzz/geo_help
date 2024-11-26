<?php

namespace App\Providers;

use App\Contracts\Services\CompaniesServiceContract;
use App\Services\CompaniesService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(CompaniesServiceContract::class, CompaniesService::class);
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
