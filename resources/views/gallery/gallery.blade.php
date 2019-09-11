@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>Gallery</h1>
        <div class="row">
            @if(Auth::check() && Auth::user()->role == 'admin')
            <button class="btn btn-dark"> <a href="{{ route('album.store') }}">
                Add Gallery</a>
            </button>
            @endif

            <div class="col-md-5">
                <form action="/search" method="POST" role="search">
                    @csrf
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-display fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach($gallery as $item)
                <div class="col-sm-4">
                    <a href="gallery/images/{{ $item->id }}">
                        <div class="item">
                            @if(empty($item->images[0]))
                                <img src="images/Mataji.png" class="img-thumbnail">
                            @else
                                <img src="{{ asset('/'.$item->images[0]->thumbnail) }}" class="img-thumbnail">
                            @endif
                            <a href="gallery/images/{{ $item->id }}" class="centered">{{ $item->thumbnail }}</a>
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