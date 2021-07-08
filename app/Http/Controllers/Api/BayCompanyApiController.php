<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class BayCompanyApiController extends Controller
{
    public function getCompanies(){
        $query=DB::table('companies')->get();
        return response()->json($query);
    }

    public function store(Request $Request)
    {
        Company::create($Request->all());
        return response('Company Saved');
    }
}
