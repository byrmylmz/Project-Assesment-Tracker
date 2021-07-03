<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayProjectsApiController extends Controller
{
    public function getProjects()
    {
        $query=DB::table('projects')->get();
        return response()->Json($query);

    }
}
