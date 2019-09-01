@extends('master.layout')

@section('content')
    <div class="flex-center position-ref full-height" id="app">
        <example-component></example-component>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
@endsection