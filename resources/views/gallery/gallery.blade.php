@extends('master.layout')

@section('content')
    <div class="container">
        <h1>Gallery</h1>
        <p> <a href="{{ route('album.store') }}">Create Album</a></p>
        <div class="row">
            @foreach($gallery as $item)
                <div class="col-sm-4">
                    <a href="gallery/images/{{ $item->id }}">
                        <div class="item">
                            <a href="gallery/images/{{ $item->id }}" class="centered">{{ $item->name }}</a>
                            @if(empty($item->images[0]))
                                <img src="images/Mataji.png" class="img-thumbnail">
                            @else
                                <img src="{{ asset('storage/'.$item->images[0]->name) }}" class="img-thumbnail">
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection