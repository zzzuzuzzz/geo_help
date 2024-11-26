<?php

namespace App\Providers;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Repositories\CompaniesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(CompaniesRepositoryContract::class, CompaniesRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
