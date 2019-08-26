@extends('master.layout')

@section('title', $content->title )

@section('content')
    <div class="container mt-4">
        <h1>Add Content</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-header">Add Content</div>
            <div class="card-body">
                <form id="form" action="{{ route('content.store') }}" method="POST">
                    @csrf
                    @include('content.form')

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection