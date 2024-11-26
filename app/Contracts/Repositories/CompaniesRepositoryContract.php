<?php

namespace App\Contracts\Repositories;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CompaniesRepositoryContract
{
    public function findAll(): Collection;
    public function paginateAll(int $count): LengthAwarePaginator;
    public function getById(int $id): Company;
    public function companyViewed(int $id): void;

}