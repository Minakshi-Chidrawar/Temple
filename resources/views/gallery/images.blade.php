@extends('master.layout')

@section('content')
    <div class="container">
        @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
        @endif

        <h1>{{ $gallery->name }}</h1>

        @include('gallery.addImage')
        <div class="row">
            @foreach($gallery->images as $image)
                <div class="col-sm-4">
                    <div class="item">
                        <img src="{{ asset('storage/'.$image->name) }}" class="img-thumbnail">
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $image->id }}">
                    Delete
                    </button>
                    <!-- Delete Modal -->
                    <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <form action="{{ route('image.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $image->id }}">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of the Delete Modal -->
                </div>
            @endforeach

        </div>
    </div>
@endsection