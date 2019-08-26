@extends('master.layout')

@section('title', 'Edit Details for' . $content->title )
    
@section('content')
    <div class="container mt-4">
        <h1>{{ $content->title }}</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        @if(Auth::check() && Auth::user()->role == 'admin')
            <div>
                <a href="{{ route('contents') }}"><button type="submit" class="btn btn-success">Back to the Contents</button></a>
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-header">Edit <strong></strong> {{ $content->title }}</div>
            <div class="card-body">
                <form action="{{ route('content.update', [$content->id]) }}" method="POST">
                    @csrf
                    @include('content.form')

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Save {{ $content->title }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection