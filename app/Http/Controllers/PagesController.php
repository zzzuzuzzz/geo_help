<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
}
