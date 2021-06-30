

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Kişi Güncelle') }}</div>

                <div class="card-body">
                    <form action="{{ route('people.update',$person->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        Kişi Adı
                        <br />
                        <input type="text" name="person_name" class="form-control" value="{{ $person->person_name }}" required>
                        <br />
                        
                        Ünvan
                        <br />
                        <input type="text" name="person_entitle" class="form-control" value="{{ $person->person_entitle }}" required>
                        <br />
                        
                        Telefon
                        <br />
                        <input type="number" name="person_phone_number" class="form-control" value="{{ $person->person_phone_number }}" required>
                        <br />

                        Durum
                        <br />
                        <Select class="form-control" name="person_status" required>
                            <option value="Akademisyen" @if ($person->person_status=='Akademisyen') selected  @endif>Akademisyen</option>  
                            <option value="Sektör Uzmanı" @if ($person->person_status=='Sektör Uzmanı') selected  @endif>Sektör Uzmanı</option>  
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
