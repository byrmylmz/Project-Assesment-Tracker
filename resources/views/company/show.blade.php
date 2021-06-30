@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kişi Detayları') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Kişi Detayları</li>
                        <li class="list-group-item">  <b>Şirket ismi:</b>  {{ $company->company_name }}</li>
                        <li class="list-group-item">  <b>Şirket Sahibi:</b>  {{ $company->company_owner }}</li>
                        <li class="list-group-item">  <b>Email:</b>  {{ $company->company_email }}</li>
                        <li class="list-group-item">  <b>Telefon:</b>  {{ $company->company_phone }}</li>
                        <li class="list-group-item">  <b>Durum:</b>  {{ $company->company_status }}</li>
                      </ul>
                      <br>
                      <a class="btn btn-info" href="{{ route('companies.index') }}">Geri</a>
  
                </div>
               
            </div>
        </div>
    </div>
   
</div>
@endsection




