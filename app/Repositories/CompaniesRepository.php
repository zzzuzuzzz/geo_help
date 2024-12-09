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
        return $this->getModel()->all();
    }

    public function paginateAll(?array $data, ?int $count = 15): LengthAwarePaginator
    {
        $result = $this->getModel()->query();

        if (isset($data['filter-data'])) {
            if ($data['filter-data'] == 'desc') {
                $result->orderBy('created_at', 'DESC');
            } else if ($data['filter-data'] == 'asc') {
                $result->orderBy('created_at', 'ASC');
            }
        }

        return $result->paginate($count);;
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

    public function companiesTypes(): Collection
    {
        // TODO: Implement companiesTypes() method.

        return $this->findAll();
    }
}
