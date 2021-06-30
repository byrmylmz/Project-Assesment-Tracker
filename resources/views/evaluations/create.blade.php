@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>{{ __('Yeni Değerlendirme Ekle') }}</h5></div>

                <div class="card-body">
                    <form action="{{ route('evaluations.store') }}" method="POST">
                        @csrf

                        Değerlendiren Kişi:
                        <br />
                        <select class="form-control" name="people_id" required>
                            @foreach ($people as $person)
                                <option value="{{ $person->id }}">{{ $person->person_name }}</option>
                            @endforeach
                        </select>
                        <br>

                        Değerledirilen Proje:
                        <br />
                        <select class="form-control" name="projects_id" required>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                            @endforeach
                        </select>
                        <br>

                        
                        Değerlendirme Özeti:
                        <br />
                        {{-- <input type="text" name="working_area" class="form-control"> --}}
                        <textarea class="form-control" rows="10" name="evaluation_comment" required></textarea> 
                        <br />
                        
                        Değerlendirme Puanı:
                        <br />
                        <input type="number" name="evaluation_score" class="form-control" required>
                        <!--<textarea class="form-control" rows="10" name="full_text"></textarea> -->
                        <br />
                      
                        <input type="submit" value=" Değerledirmeyi Kaydet " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


