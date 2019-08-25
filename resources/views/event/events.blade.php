@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>News & Events</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        @if(Auth::check() && Auth::user()->role == 'admin')
        <div class="row mb-4 mt-2">
            <button class="btn btn-success"> <a href="{{ route('event.create') }}">
                Add Event</a>
            </button>
        </div>
        @endif

        @if(!empty($events))
            <table class="table">
                <thead>
                    <th>Event Title</th>
                    <th>Event Start Date</th>
                    <th>Event End Date</th>
                    <th>Sponsored By</th>
                    <th></th>
                </thead>
                @foreach($events as $event)
                    <tr>
                        <td><a href="events/event/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ $event->startDate }}</td>
                        <td>{{ $event->endDate }}</td>
                        <td>{{ $event->sponsor }}</td>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('event.edit', [$event->id]) }}"><button type="button"  class="btn btn-success btn-sm">Edit</button></a>
                                <button type="button"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{ $event->id }}">Delete</button>
                            </div>
                        </td>
                        @endif
                    </tr>
                    @include('event.deleteModal')
                @endforeach
            </table>

            <div class="panel-heading mt-5 pagination" style="">
                {{$events->links()}}
            </div>
        @endif
    </div>
@endsection