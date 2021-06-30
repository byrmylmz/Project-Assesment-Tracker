@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Değerlendirme Güncelleme') }}</div>

                <div class="card-body">
                    <form action="{{ route('evaluations.update', $evaluation->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        Değerlendiren Kişi:
                        <br />
                        <select class="form-control" name="people_id" required>
                            @foreach ($people as $person)
                                <option value="{{ $person->id }}"
                                        @if ($person->id == $evaluation->people_id) selected @endif>{{ $person ->person_name }}</option>
                            @endforeach
                        </select>
                        <br />

                        Değerlendirilen Proje:
                        <br />
                        <select class="form-control" name="projects_id" required>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}"
                                        @if ($project->id == $evaluation->projects_id) selected @endif>{{ $project ->project_name }}</option>
                            @endforeach
                        </select>
                        <br />

                        Proje Yorumu:
                        <br />
                        <textarea name="evaluation_comment" class="form-control" id="" cols="30" rows="10" required>{{ $evaluation->evaluation_comment }}</textarea>
                        {{-- <input type="text" name="working_area" class="form-control" value="{{ $evaluation->working_area }}" /> --}}
                        <br />

                        Değerlendirme Puanı:
                        <br />
                        <input type="number" name="evaluation_score" class="form-control" value="{{ $evaluation->evaluation_score }}"  required>
                        <br />
                        
                        <br>
                        <input type="submit" value=" Güncelle " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
