<?php

namespace App\Contracts\Services;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CompanyTypesServiceContract
{
    public function getAll(): Collection;
}
