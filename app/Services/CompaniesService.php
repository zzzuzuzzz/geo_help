<?php

namespace App\Services;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Contracts\Services\CompaniesServiceContract;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;

class CompaniesService implements CompaniesServiceContract
{
    public function __construct(private readonly CompaniesRepositoryContract $companyRepository)
    {
    }

    public function paginateAll(int $count = 15): LengthAwarePaginator
    {
        return $this->companyRepository->paginateAll($count);
    }

    public function getById(int $id): Company
    {
        return $this->companyRepository->getById($id);
    }

    public function companyViewed(int $id): void
    {
        $this->companyRepository->companyViewed($id);
    }
}
