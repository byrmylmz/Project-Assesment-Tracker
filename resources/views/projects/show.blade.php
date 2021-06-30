@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Proje Detayları') }}</div>

                <div class="card-body">
                   
                    <ul class="list-group">
                        @foreach($projects as $project)
                        <li class="list-group-item active" aria-current="true">Proje Özeti</li>
                        <li class="list-group-item"> <b>Proje:</b> {{ $project->project_name }}</li>
                        <li class="list-group-item"> <b>Proje Özeti:</b> {{ $project->project_summary }}</li>
                        <li class="list-group-item"> <b>Başlangıç Tarihi:</b> {{ $project->project_starting_date }}</li>
                        <li class="list-group-item"> <b>Bitiş tarihi:</b> {{ $project->project_finishing_date }}</li>
                        @endforeach
                      </ul>
                      
                      @foreach($evaluations as $evaluation)
                      <br>
                      <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Değerlendirme No:{{ $evaluation->id }}</li>
                        <li class="list-group-item"> <b>Değerlendirme Yapan:</b> {{ $evaluation->person_name }}</li>
                        <li class="list-group-item"> <b>Değerlendirme Puanı:</b> {{ $evaluation->evaluation_score}}</li>
                      </ul>
                      @endforeach
                      <br>
                      <a class="btn btn-info" href="{{ route('projects.index') }}">Geri</a>
                 </div>
                
               
            </div>
        </div>
    </div>
   
</div>
@endsection




