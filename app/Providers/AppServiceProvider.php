<?php

namespace App\Providers;

use App\Contracts\Services\CompaniesServiceContract;
use App\Contracts\Services\CompanyTypesServiceContract;
use App\Services\CompaniesService;
use App\Services\CompanyTypesService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(CompaniesServiceContract::class, CompaniesService::class);
        $this->app->singleton(CompanyTypesServiceContract::class, CompanyTypesService::class);
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
