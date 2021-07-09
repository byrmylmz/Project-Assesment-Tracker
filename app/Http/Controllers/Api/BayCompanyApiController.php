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

    public function store(Request $request)
    {
        Company::create($request->all());
        return response('Company Saved');
    }

    public function update(Request $request,Company $company)
    {
        $company->update($request->all());
        return response('Company Update');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response('Company Deleted.');
    }
}
