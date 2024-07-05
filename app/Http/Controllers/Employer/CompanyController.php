<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\Employer\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::where('user_id', Auth::id())->get();
        return view('employer.companies.index', compact('companies'));
    }

  
}
