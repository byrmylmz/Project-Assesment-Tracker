@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kişi Detayları') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Kişi Bilgileri</li>
                        <li class="list-group-item"> <b>İsim Soyisim:</b> {{ $person->person_name }}</li>
                        <li class="list-group-item"> <b>Ünvan:</b> {{ $person->person_entitle }}</li>
                        <li class="list-group-item"> <b>Telefon:</b> {{ $person->person_phone_number }}</li>
                        <li class="list-group-item"> <b>Durum:</b> {{ $person->person_status }}</li>
                        <li class="list-group-item"> <b>Proje Sayısı:</b> {{ $person->person_nor }}</li>
                      </ul>
                      <br>
                      <a class="btn btn-info" href="{{ route('people.index') }}">Geri</a>
  
                 </div>
               
            </div>
        </div>
    </div>
   
</div>
@endsection




