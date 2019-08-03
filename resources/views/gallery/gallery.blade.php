@extends('master.layout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($gallery as $item)
                <div class="col-sm-4">
                    <a href="gallery/images/{{ $item->id }}">
                        <div class="item">
                            <img src="storage/uploads/6L8XE46FOlcDhC7Ca8iCqL0f0JacmqZzWOw1Qmuw.jpeg" class="img-thumbnail">
                            <a href="gallery/images/{{ $item->id }}" class="centered">{{ $item->name }}</a>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection