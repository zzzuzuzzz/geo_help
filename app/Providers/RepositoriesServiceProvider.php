<?php

namespace App\Providers;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Contracts\Repositories\CompanyTypesRepositoryContract;
use App\Repositories\CompaniesRepository;
use App\Repositories\CompanyTypesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(CompaniesRepositoryContract::class, CompaniesRepository::class);
        $this->app->singleton(CompanyTypesRepositoryContract::class, CompanyTypesRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
