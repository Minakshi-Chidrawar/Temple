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
                                <button type="button"  class="btn btn-success btn-sm"><a href="{{ route('event.edit', [$event->id]) }}">Edit</a></button>
                                <button type="button"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{ $event->id }}">Delete</button>
                            </div>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </table>

            <!-- Delete Modal -->
            <div class="modal fade" id="exampleModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to delete?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('event.delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $event->id }}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of the Delete Modal -->
            <div class="panel-heading mt-5 pagination" style="">
                {{$events->links()}}
            </div>
        @endif
    </div>
@endsection