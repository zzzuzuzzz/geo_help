<?php

namespace App\View\Components;

use App\Contracts\Services\CompaniesServiceContract;
use App\Contracts\Services\CompanyTypesServiceContract;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CompanyInSidebar extends Component
{
    public function __construct(private readonly CompanyTypesServiceContract $companyTypesService) {}

    public function render(): View|Closure|string
    {
        $companiesTypes = $this->companyTypesService->getAll();
        return view('components.company-in-sidebar', ['companyInSidebar' => $companiesTypes]);
    }
}
