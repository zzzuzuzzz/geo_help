<?php

namespace App\Services;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Contracts\Services\CompaniesServiceContract;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CompaniesService implements CompaniesServiceContract
{
    public function __construct(private readonly CompaniesRepositoryContract $companyRepository)
    {
    }

    public function paginateAll(?array $data, ?int $count = 15): LengthAwarePaginator
    {
        return $this->companyRepository->paginateAll($data, $count);
    }

    public function getById(int $id): Company
    {
        return $this->companyRepository->getById($id);
    }

    public function companyViewed(int $id): void
    {
        $this->companyRepository->companyViewed($id);
    }

    public function companiesTypes(): Collection
    {
        return $this->companyRepository->companiesTypes();
    }
}
