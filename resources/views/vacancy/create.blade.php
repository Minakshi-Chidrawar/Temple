@extends('master.layout')

@section('title', 'Add New Vacancy' . $vacancy->title )

@section('content')
    <div class="container mt-4">
        <h1>Priest Service</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-header">Add New Vacancy</div>
            <div class="card-body">
                <form id="form" action="{{ route('vacancy.store') }}" method="POST">
                    @csrf
                    @include('vacancy.form')

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Add Vacancy</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection