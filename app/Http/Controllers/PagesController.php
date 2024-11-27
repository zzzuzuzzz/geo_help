<?php

namespace App\Http\Controllers;

use App\Contracts\Services\CompaniesServiceContract;
use App\Http\Requests\CompaniesRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PagesController extends Controller
{
    public function __construct(private readonly CompaniesServiceContract $companiesService)
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        return view('home');
    }

    public function companies(CompaniesRequest $request): View
    {
        $data = $request->validated();
        $companies = $this->companiesService->paginateAll($data);
        return view('pages.companies', ['companies' => $companies]);
    }

    public function company(int $id): View
    {
        $company = $this->companiesService->getById($id);
        return view('pages.company', ['company' => $company]);
    }

    public function companyPatch(int $id): RedirectResponse
    {
        $this->companiesService->companyViewed($id);
        return redirect()->back();
    }
}
