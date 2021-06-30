<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Person;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('evaluations.index');
       
        // $evaluations=Evaluation::all();
        // $evaluations=DB::table('evaluations')
                   
        //             ->join('people','evaluations.people_id', '=','people.id' )
        //             ->join('projects','evaluations.projects_id','=','projects.id')
        //             ->select('evaluations.*','people.person_name','projects.project_name')
        //             ->orderBy('evaluations.id', 'desc')
        //             ->get();

        //             $orderNumber=1;

        // return view('evaluations.index',compact('evaluations','orderNumber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people=Person::all();
        $projects=Project::all();
        return view('evaluations.create',compact('people','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
        Evaluation::create($request->all()+['users_id'=>auth()->id()]);
        return redirect()->route('evaluations.index');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        
        return view('evaluations.show',compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        $projects=Project::all();
        $people=Person::all();
        return view('evaluations.edit',compact('evaluation','projects','people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $evaluation->update($request->all()+['users_id'=>auth()->id()]);
        return redirect()->route('evaluations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return redirect()->route('evaluations.index');
    }



}
