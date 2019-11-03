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
                <form action="{{ route('results') }}" method="get" role="search">
                    @csrf
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search for the album">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-display fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <div id="search_list"></div>  

            </div>
        </div>

        <div class="row">
            @foreach($gallery as $item)
                <div class="container col-sm-4">
                    <a href="gallery/images/{{ $item->id }}">
                        <div class="item">
                            @if(empty($item->images[0]))
                                <img src="images/Mataji.png" class="img-thumbnail">
                            @else
                                <figure class="figure">
                                    <figcaption class="figure-caption text-center gallery-name">{{ ucfirst($item->name) }}</figcaption>
                                    <img src="{{ asset('/'.$item->images[0]->thumbnail) }}" class="img-thumbnail">
                                </figure>
                            @endif
                            <a href="gallery/images/{{ $item->id }}" class="centered">{{ $item->thumbnail }}</a>
                        </div>
                    </a>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <button type="button" class="btn btn-danger text-left" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                            Delete
                        </button>
                    @endif

                    <!-- Delete Modal -->
                        @include('gallery.deleteGallery')
                    <!-- End of the Delete Modal -->
                </div>
            @endforeach
        </div>

        <div class="panel-heading mt-5 pagination" style="">
            {{$gallery->links()}}
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#search').on('keyup',function() {
                var query = $(this).val();
                $.ajax({
                    url:"{{ route('search') }}",
                    type:"GET",
                    data:{'search':query},
                    success:function (data) {
                        $('#search_list').html(data);
                    }
                })
            });

            $(document).on('click', 'li', function(){
                var value = $(this).text();
                $('#search').val(value);
                $('#search_list').html("");
            });
        });
    </script>
@endsection