<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Support\Facades\DB;




class EvaluationsApiController extends Controller
{
    public function getEvaluations()
    {
        $query=DB::table('evaluations')
            ->join('people','evaluations.people_id', '=','people.id' )
            ->join('projects','evaluations.projects_id','=','projects.id')
            ->select(
                'evaluations.id',
                'people.person_name',
                'projects.project_name',
                'evaluation_score',
                'evaluation_comment',
                'evaluations.created_at as created_at'
            );
            
        return datatables($query)
      
            ->addColumn('action', function ($evaluation) {
                return '
                        <div class="btn-group " >
                        <a href="'.route('evaluations.show', $evaluation->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <a href="'.route('evaluations.edit',$evaluation->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="'.route('evaluations.delete',$evaluation->id).'" class="btn  btn-outline-secondary">
                        <i class="bi bi-trash"></i>
                        </a>
                        </div>
                        ';
            })
            ->make(true);
    }
}
