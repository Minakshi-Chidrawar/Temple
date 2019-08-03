@extends('master.layout')

@section('content')
    <div class="container">
        <h1>{{ $gallery->name }}</h1>
        <div class="row">
            @foreach($gallery->images as $image)
                <div class="col-sm-4">
                        <div class="item">
                            <img src="{{ asset('storage/'.$image->name) }}" class="img-thumbnail">
                        </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection