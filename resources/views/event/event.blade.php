@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <div class="card mt-5">
            <div class="card-header">{{ $event->title}}</div>
            <div class="card-body">
                <p>
                    <strong>Date(s)</strong>: {{ $event->startDate }} - {{ $event->endDate }}
                </p>
                <p>
                    {{ $event->description }}
                </p>
                <p>
                    <strong>Sponsored By</strong>: {{ $event->sponsor }}
                </p>
            </div>
        </div>

    </div>
@endsection