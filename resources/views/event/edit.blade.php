@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>News & Events</h1>

        <a href="{{ route('events') }}"><button type="submit" class="btn btn-success">Events</button></a>
        
        <div class="card mt-3">
            <div class="card-header">Update Event <strong>{{ $event->title }}</strong></div>
            <div class="card-body">
                <form id="form" action="{{ route('event.update', [$event->id]) }}" method="POST">
                    @csrf

                    @include('event.form')

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Update Event</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection