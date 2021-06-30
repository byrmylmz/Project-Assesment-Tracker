@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Edit Projects') }}</div>

                <div class="card-body">
                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        
                        Project Name:
                        <br />
                        <input type="text" name="project_name" class="form-control" value="{{ $project->project_name }}" required>
                        <br />
                        
                        Project Summary:
                        <br />
                        <textarea class="form-control" rows="10" name="project_summary" required>{{ $project->project_summary }} </textarea> 
                        <br />

                        Project Starting Date:
                        <br />
                        <input type="date" name="project_starting_date" class="form-control" value="{{ $project->project_starting_date }}" required>
                        <br />
                        
                        Project Finishing Date:
                        <br />
                        <input type="date" name="project_finishing_date" class="form-control" value="{{ $project->project_finishing_date }}" required>
                        <br />


                        <br>
                        <input type="submit" value=" Update project " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
