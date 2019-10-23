@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <div class="">
            <a href="{{ route('events') }}"><button type="submit" class="btn btn-success">Back to the Events</button></a>
	    @if(Auth::check() && Auth::user()->role == 'admin')
                <a href="{{ route('event.edit', [$event->id]) }}"><button type="button"  class="btn btn-danger">Edit</button></a>
	    @endif
        </div>
        
        <div class="card mt-4">
            <div class="card-header">{{ $event->title}}</div>
            <div class="card-body">
                <p>
                    <strong>Date(s)</strong>: {{ $event->startDate }} - {{ $event->endDate }}
                </p>
                <p>
                    {!! $event->description !!}
                </p>
                <p>
                    <strong>Sponsored By</strong>: {{ $event->sponsor }}
                </p>
            </div>
        </div>

    </div>
@endsection
