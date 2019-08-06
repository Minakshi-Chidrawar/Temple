@extends('master.layout')

@section('content')
    <div class="container">
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
    </div>
@endsection