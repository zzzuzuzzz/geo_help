<?php

namespace App\Repositories;

use App\Contracts\Repositories\CompaniesRepositoryContract;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CompaniesRepository implements CompaniesRepositoryContract
{
    public function __construct(private readonly Company $company)
    {
    }

    public function findAll(): Collection
    {
        return $this->getModel()->get();
    }

    public function paginateAll(int $count = 15): LengthAwarePaginator
    {
        return $this->getModel()->paginate($count);
    }

    public function getById(int $id): Company
    {
        return $this->getModel()->find($id);
    }

    public function getModel(): Company
    {
        return $this->company;
    }

    public function companyViewed(int $id): void
    {
        $company = $this->getById($id);
        $company->update(['viewed' => $company->viewed == 1 ? 0 : 1]);
    }
}
