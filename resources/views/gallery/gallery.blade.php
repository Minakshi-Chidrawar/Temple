@extends('master.layout')

@section('content')
    <div class="container">
        <h1>Gallery</h1>
        <button class="btn btn-link"> <a href="{{ route('album.store') }}">Create Album</a></button>
        <div class="row">
            @foreach($gallery as $item)
                <div class="col-sm-4">
                    <a href="gallery/images/{{ $item->id }}">
                        <div class="item">
                            @if(empty($item->images[0]))
                                <img src="images/Mataji.png" class="img-thumbnail">
                            @else
                                <img src="{{ asset('storage/'.$item->images[0]->name) }}" class="img-thumbnail">
                            @endif
                            <a href="gallery/images/{{ $item->id }}" class="centered">{{ $item->name }}</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="panel-heading mt-5 pagination" style="">
            {{$gallery->links()}}
        </div>
    </div>
@endsection