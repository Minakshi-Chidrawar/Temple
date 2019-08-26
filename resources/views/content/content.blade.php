@extends('master.layout')

@section('content')
    <div class="container mt-4">
        @if(Auth::check() && Auth::user()->role == 'admin')
            <div>
                <a href="{{ route('contents') }}"><button type="submit" class="btn btn-success">Back to the Contents</button></a>
                <a href="{{ route('content.edit', [$content->id]) }}"><button type="button"  class="btn btn-danger">Edit</button></a>
            </div>
        @endif
        
        <div class="card mt-4">
            <div class="card-header">{{ $content->title}}</div>
            <div class="card-body">
                <p>
                    {!! $content->description !!}
                </p>
            </div>
        </div>

        @if(Auth::check() && Auth::user()->role == 'admin')
            <button type="button"  class="btn btn-danger mt-4" data-toggle="modal" data-target="#exampleModal{{ $content->id }}">Delete</button>
            @include('content.deleteModal')
        @endif
    </div>
@endsection