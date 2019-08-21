@extends('master.layout')

@section('title', 'Edit Details for' . $vacancy->title )
    
@section('content')
    <div class="container mt-4">
        <h1>Priest Service</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-header">Edit Vacancy for <strong></strong> {{ $vacancy->title }}</div>
            <div class="card-body">
                <form action="/vacancies/{{ $vacancy->id }}" method="POST">
                    @csrf
                    @include('vacancy.form')

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Save Vacancy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection