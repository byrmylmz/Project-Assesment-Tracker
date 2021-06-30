

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yeni Kişi') }}</div>

                <div class="card-body">
                    <form action="{{ route('people.store') }}" method="POST">
                        @csrf
                        
                        Kişi Adı
                        <br />
                        <input type="text" name="person_name" class="form-control" required>
                        <br />
                        
                        Ünvan
                        <br />
                        <input type="text" name="person_entitle" class="form-control" required>
                        <br />
                        
                        Telefon
                        <br />
                        <input type="number" name="person_phone_number" class="form-control" required>
                        <br />

                        Durum
                        <br />
                        <Select class="form-control" name="person_status" required>
                            <option value="Akademisyen">Akademisyen</option>  
                            <option value="Sektör Uzmanı">Sektör Uzmanı</option>  
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
