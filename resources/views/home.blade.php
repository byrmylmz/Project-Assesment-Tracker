@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Proje Değerlendirme Takip Sistemi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kullanıcı Adı: {{ Auth::user()->name }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
