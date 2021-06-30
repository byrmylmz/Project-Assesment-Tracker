@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Değerlendirme Detayları') }}</div>

                <div class="card-body">
                   
                   
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Değerlendirme Detayı</li>
                        <li class="list-group-item"> <b>Yorum:</b>  {{ $evaluation->evaluation_comment }}</li>
                        <li class="list-group-item"> <b>Puan:</b>  {{ $evaluation->evaluation_score }}</li>
                      </ul>
                      <br>
                        <a class="btn btn-info" href="{{ route('evaluations.index') }}">Geri</a>
                </div>
                
               
            </div>
        </div>
    </div>
   
</div>
@endsection




