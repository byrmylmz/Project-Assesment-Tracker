<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayEvaluationApiController extends Controller
{
    public function getEvaluations()
    {
        $query=DB::table('evaluations')->get();
        return response()->Json($query);

    }
}
