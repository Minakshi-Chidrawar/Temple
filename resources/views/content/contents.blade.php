@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>Content</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        @if(Auth::check() && Auth::user()->role == 'admin')
        <div class="row mb-4 mt-2">
            <button class="btn btn-success"> <a href="{{ route('content.create') }}">
                Add content</a>
            </button>
        </div>
        @endif

        @if(!(empty($contents)))
            <table class="table">
                <thead>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </thead>
                @foreach($contents as $content)
                    <tr>
                        <td><a href="contents/content/{{ $content->id }}">{{ $content->title }}</a></td>
                        <td>{{ $content->created_at }}</td>
                        <td>{{ $content->updated_at }}</td>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{ route('content.edit', [$content->id]) }}"><button type="button"  class="btn btn-success btn-sm">Edit</button></a>
                                    <button type="button"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{ $content->id }}">Delete</button>
                                </div>
                            </td>
                        @endif
                    </tr>
                    @include('content.deleteModal')
                @endforeach
            </table>

            <div class="panel-heading mt-5 pagination" style="">
                {{$contents->links()}}
            </div>

        @else
            <p>This is empty</p>
        @endif
    </div>
@endsection