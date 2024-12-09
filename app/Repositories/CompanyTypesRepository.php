<?php

namespace App\Repositories;

use App\Contracts\Repositories\CompanyTypesRepositoryContract;
use App\Models\Company;
use App\Models\CompanyType;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CompanyTypesRepository implements CompanyTypesRepositoryContract
{
    public function __construct(private readonly CompanyType $companyType)
    {
    }

    public function getAll(): Collection
    {
        return $this->getModel()->all();
    }


    public function getModel(): CompanyType
    {
        return $this->companyType;
    }
}
