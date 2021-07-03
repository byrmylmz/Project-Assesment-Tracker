<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayPeopleApiController extends Controller
{
    public function getPeople() {
        $query=DB::table('people')->get();
        return response()->Json($query);
    } 
}
