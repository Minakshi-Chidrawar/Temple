@extends('master.layout')

@section('content')
    <div class="container mt-4">
        @if(Session::has('message'))
            <div class="alert alert-succes">{{ session::get('message') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="show"></div>
                <div class="card">
                    <div class="card-body">
                        <div id="errorMsg"></div>
                        <form id="form" action=" {{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="album">Name of Album</label>
                                <input type="text" name="album" class="form-control" value="{{ old('album') }}" required minlength="3">
                            </div>
                            <div class="input-group control-group add-more-button">
                                <input type="file" name="image[]" class="form-control" id="image" accept="image/*" required>
                                <div class="input-group-btn">
                                    <button class="btn btn-success btn-add-more" type="button">Add</button>
                                </div>
                            </div>

                            <div class="copy">
                                <div class="input-group control-group mt-4 remove-button">
                                    <input type="file" name="image[]" class="form-control" id="image" accept="image/*">
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
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#form").on('submit', function (e) {
            e.preventDefault();
            $("#errorMsg").empty();
            $.ajax({
                url: '/album',
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,

                success:function (response) {
                    $(".show").html(response);
                    $("#form")[0].reset();
                },
                error:function (data) {
                    var error = data.responseJSON;
                    $.each(error.errors, function (key, value) {
                       $("#errorMsg").append('<p class="text-left text-danger">'+value+'</p>')
                    });
                }
            });
        });
    });
</script>
