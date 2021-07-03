<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardApiController extends Controller
{
    public function getAcademic(){
        $type=DB::table('people')->selectRaw('Count(*) as akademisyen')->where('person_status','=','Akademisyen')->get();
        return response()->json($type);
    }
    public function getSpecialist(){
        $type=DB::table('people')->selectRaw('Count(*) as sektor_uzmani')->where('person_status','=','Sektör Uzmanı')->get();
        return response()->json($type);
    }
}
