@extends('master.layout')

@section('content')
    <div class="back-color">
        <div class="container pt-4 pb-4">
            <h1>{{ $content->title}}</h1>
            <div class="bs-callout">
                <p>
                    {!! $content->description !!}
                </p>
            </div>
        </div>
    </div>
@endsection