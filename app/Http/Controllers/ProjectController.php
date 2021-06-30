<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Evaluation;
use App\Models\Company;

use Illuminate\Support\Facades\DB;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return view('projects.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Project::create($request->all()+['users_id'=>auth()->id()]);
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        
        $evaluations=DB::table('evaluations')
            ->join('people', function ($join) use($project) {
                $join->on('evaluations.people_id', '=', 'people.id')
                     ->where('evaluations.projects_id', '=', $project);
            })
            ->get();

           
            
        $projects=Project::where('id',$project)->get();
        
        

        return view('projects.show',compact('projects','evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {   
        //$evaluation=Evaluation::where('projects_id',$project);
        $companies=Company::all();
        return view('projects.edit', compact('project','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all()+['users_id'=>auth()->id()]);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
