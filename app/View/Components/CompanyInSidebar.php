<?php

namespace App\View\Components;

use App\Contracts\Services\CompaniesServiceContract;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CompanyInSidebar extends Component
{
    public function __construct(private readonly CompaniesServiceContract $companiesService) {}

    public function render(): View|Closure|string
    {
        $companiesTypes = $this->companiesService->companiesTypes();
        dd($companiesTypes);
        return view('components.company-in-sidebar', ['companyInSidebar' => $companiesTypes]);
    }
}
