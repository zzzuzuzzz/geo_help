<?php

namespace App\Services;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Contracts\Repositories\CompanyTypesRepositoryContract;
use App\Contracts\Services\CompaniesServiceContract;
use App\Contracts\Services\CompanyTypesServiceContract;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CompanyTypesService implements CompanyTypesServiceContract
{
    public function __construct(private readonly CompanyTypesRepositoryContract $companyTypesRepository)
    {
    }

    public function getAll(): Collection
    {
        return $this->companyTypesRepository->getAll();
    }
}
