<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function companies()
    {
        $companies = Company::paginate(15);
        return view('pages.companies', ['companies' => $companies]);
    }

    public function company(Company $company)
    {
        return view('pages.company', ['company' => $company]);
    }

    public function companyPatch(Company $company)
    {
        $company->update(['viewed' => $company->viewed == 1 ? 0 : 1]);
        return redirect()->back();
    }

    public function loadJson(Request $request)
    {
        dd($request);
    }
}
