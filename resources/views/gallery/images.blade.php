@extends('master.layout')

@section('content')
    <div class="container mt-4">
        @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
        @endif

        <h1>{{ $gallery->name }}</h1>

        <div class="row">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                @if(Auth::check() && Auth::user()->role == 'admin')
                    <div class="btn-group  btn-group-sm mr-2" role="group" aria-label="Add Image">
                        @include('gallery.addImage')
                    </div>
                @endif
                <div class="btn-group  btn-group-sm" role="group" aria-label="Go back to Gallery">
                    <a href="{{ route('gallery') }}">
                        <button type="button" class="btn btn-outline-info">
                            Gallery
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($gallery->images as $image)
                <div class="col-sm-4">
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#image{{ $image->id }}">
                            <img src="{{ asset('/'.$image->thumbnail) }}" class="img-thumbnail">
                        </a>
                    </div>
                    @include('gallery.viewImage')

                    <!-- Button trigger modal -->
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal{{ $image->id }}">
                        Delete
                        </button>
                    @endif

                    <!-- Delete Modal -->
                    @include('gallery.deleteModal')
                    <!-- End of the Delete Modal -->
                </div>
            @endforeach

        </div>
    </div>
@endsection