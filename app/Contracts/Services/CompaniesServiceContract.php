<?php

namespace App\Contracts\Services;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CompaniesServiceContract
{
    public function paginateAll(?array $data, ?int $count = 15): LengthAwarePaginator;
    public function getById(int $id): Company;
    public function companyViewed(int $id): void;
}
