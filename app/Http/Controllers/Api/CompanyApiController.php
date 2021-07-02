<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyApiController extends Controller
{
    public function getCompanies()  
    {
        $query=DB::table('companies')
            ->select(
                'id',
                'company_name',
                'company_owner',
                'company_email',
                'company_phone',
                'company_status',
                'created_at'
            );
        
        return datatables($query)
            ->addColumn('action',function($company){
                return '
                <div class="btn-group " >
                <a href="'.route('companies.show', $company->id).'" class="btn  btn-outline-secondary">
                <i class="bi bi-arrows-fullscreen"></i>
                </a>
                <a href="'.route('companies.edit',$company->id).'" class="btn  btn-outline-secondary">
                <i class="bi bi-pencil-square"></i>
                </a>
                <a href="'.route('companies.delete',$company->id).'" class="btn  btn-outline-secondary">
                <i class="bi bi-trash"></i>
                </a>
                </div>
                ';
            })->make(true);

        
    }
}
