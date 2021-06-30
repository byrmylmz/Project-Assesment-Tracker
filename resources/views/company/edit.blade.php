

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Şirket Bilgilerini Güncelle') }}</div>

                <div class="card-body">
                    <form action="{{ route('companies.update', $company->id ) }}" method="POST">
                        @csrf
                        @Method('PUT')

                        Şirket Adı
                        <br />
                        <input type="text" name="company_name" class="form-control" value="{{ $company->company_name }}" required>
                        <br />
                        
                        Şirket Sahibi
                        <br />
                        <input type="text" name="company_owner" class="form-control" value="{{ $company->company_owner }}" required>
                        <br />

                        Email
                        <br />
                        <input type="text" name="company_email" class="form-control" value="{{ $company->company_email }}" required>
                        <br />
                        
                        Telefon
                        <br />
                        <input type="number" name="company_phone" class="form-control" value="{{ $company->company_phone }}" required>
                        <br />

                        Durum
                        <br />
                        <Select class="form-control" name="company_status" required>
                            <option value="Aktif" @if ($company->company_status=='Akftif') selected  @endif>Aktif</option>  
                            <option value="Pasif" @if ($company->company_status=='Pasif') selected  @endif>Pasif</option>  
                        </Select>
                        <br />

                       
                        <input type="submit" value=" Güncelle " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
