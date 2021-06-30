<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleApiController extends Controller
{
    public function getPeople() {
        $query=DB::table('people')
            ->select(
                'id',
                'person_name',
                'person_entitle',
                'person_phone_number',
                'person_status',
                'person_nor',
                'created_at'
            );
           


            return datatables($query)
                ->addColumn('action',function($people){
                    return '
                        <div class="btn-group " >
                        <a href="'.route('people.show', $people->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <a href="'.route('people.edit',$people->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="'.route('people.delete',$people->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-trash"></i>
                        </a>
                        </div>
                        ';
                })->make(true);
    }
}
