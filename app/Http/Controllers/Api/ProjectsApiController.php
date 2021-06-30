<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectsApiController extends Controller
{
    public function getProjects()
    {
        $query=DB::table('projects')
            ->select(
                'id',
                'project_name',
                'project_summary',
                'project_starting_date',
                'project_finishing_date',
                'created_at',
            );

            return datatables($query)
            ->addColumn('action', function ($project) {
                return '
                        <div class="btn-group " >
                        <a href="'.route('projects.show', $project->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <a href="'.route('projects.edit',$project->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="'.route('projects.delete',$project->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-trash"></i>
                        </a>
                        </div>
                        ';
            })->make(true);  
    }
}
