@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Proje Detayları') }}</div>

                <div class="card-body">
                    <a class="btn btn-info" href="{{ route('projects.index') }}">Geri</a>
                    <br><br>
                    <ul class="list-group">
                        @foreach($projects as $project)
                        <li class="list-group-item active" aria-current="true">Proje Özeti</li>
                        <li class="list-group-item">  {{ $project->project_name }}</li>
                        <li class="list-group-item">  {{ $project->project_summary }}</li>
                        <li class="list-group-item">  {{ $project->project_starting_date }}</li>
                        <li class="list-group-item">  {{ $project->project_finishing_date }}</li>
                        @endforeach
                      </ul>
                      
                      @foreach($evaluations as $evaluation)
                      <br>
                      <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Değerlendirme No:{{ $evaluation->person_name }}</li>
                        {{-- <li class="list-group-item"> Değerlendirme Yapan: {{ $evaluation->people_id }}</li>
                        <li class="list-group-item"> Değerlendirme Puanı: {{ $evaluation->evaluation_score}}</li> --}}
                      </ul>
                      @endforeach
                 </div>
               
            </div>
        </div>
    </div>
   
</div>
@endsection




