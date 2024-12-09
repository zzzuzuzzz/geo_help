<?php

namespace App\Contracts\Repositories;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CompanyTypesRepositoryContract
{
    public function getAll(): Collection;
}
