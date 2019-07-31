@extends('master.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="" methos="POST" enctype="multipart/form-data">
            @csrf

            <input type="file" name="image" class="form-control">
            <button class="btn btn-primary" type="submit">Submit</button>

        </form>
    </div>
</div>
@endsection