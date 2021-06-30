

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yeni Şirket') }}</div>

                <div class="card-body">
                    <form action="{{ route('companies.store') }}" method="POST">
                        @csrf
                        
                        Şirket Adı
                        <br />
                        <input type="text" name="company_name" class="form-control" required>
                        <br />
                        
                        Şirket Sahibi
                        <br />
                        <input type="text" name="company_owner" class="form-control" required>
                        <br />

                        Email
                        <br />
                        <input type="text" name="company_email" class="form-control" required>
                        <br />
                        
                        Telefon
                        <br />
                        <input type="number" name="company_phone" class="form-control" required>
                        <br />

                        Durum
                        <br />
                        <Select class="form-control" name="company_status" required>
                            <option value="Aktif">Aktif</option>  
                            <option value="Pasif">Pasif</option>  
                        </Select>
                        <br />

                       
                        <input type="submit" value=" Kaydet " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
