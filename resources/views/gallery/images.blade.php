@extends('master.layout')

@section('content')
    <div class="container">
        <!-- Add image -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Image
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $gallery->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action=" {{ route('album.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="album">Name of Album</label>
                                    <input type="hidden" name="id" value="{{ $gallery->id }}" class="form-control">
                                </div>
                                <div class="input-group control-group add-more-button">
                                    <input type="file" name="image[]" class="form-control" id="image">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success btn-add-more" type="button">Add</button>
                                    </div>
                                </div>

                                <div class="copy">
                                    <div class="input-group control-group mt-4 remove-button">
                                        <input type="file" name="image[]" class="form-control" id="image">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger remove" type="button">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success mt-4" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of Add image -->
        @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>
        @endif

        <h1>{{ $gallery->name }}</h1>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $(".copy").hide();
        $(".btn-add-more").click(function () {
          //alert("ok");
           var html = $(".copy").html();
           $(".add-more-button").after(html);
       });

        $("body").on("click", ".remove", function () {
            $(this).parents(".control-group").remove();
        });
    });
</script>