

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yeni Proje') }}</div>

                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        
                        Şirket Seç:
                        <br>
                        <select name="companies_id" id="" class="form-control" required>
                            @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                        <br>
                        
                        Proje Adı
                        <br />
                        <input type="text" name="project_name" class="form-control" required>
                        <br />
                        
                        Proje Özeti:
                        <br />
                        <textarea class="form-control" rows="10" name="project_summary" required></textarea> 
                        <br />

                        Proje Başlangıç Tarihi:
                        <br />
                        <input type="date" name="project_starting_date" class="form-control" required>
                        <br />
                        
                        Proje Bitiş Tarihi:
                        <br />
                        <input type="date" name="project_finishing_date" class="form-control" required>
                        <br />
                      
                        <input type="submit" value=" Save Project " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
