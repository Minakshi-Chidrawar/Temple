@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>News & Events</h1>

        @if(Session::has('message'))
            <div class="alert alert-success">{{ session::get('message') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-header">Create a Event</div>
            <div class="card-body">
                <form id="form" action="{{ route('event.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Event:</label>
                        <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : ''}}"
                        value="{{ old('title') }}" />
                    </div>
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif

                    <div class="form-group">
                        <label for="description">Event Description:</label>
                        <textarea name="description" id ="summernote" class="form-control {{ $errors->has('description') ? ' is-invalid' : ''}}"
                        value="{{ old('description') }}"></textarea>
                    </div>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="startDate">Event Start Date:</label>
                            <input type="date" name="startDate" class="form-control {{ $errors->has('startDate') ? ' is-invalid' : ''}}"
                        value="{{ old('startDate') }}"/>
                        </div>
                        @if ($errors->has('startDate'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('startDate') }}</strong>
                            </span>
                        @endif
                        <div class="form-group col-6">
                            <label for="endDate">Event End Date:</label>
                            <input type="date" name="endDate" class="form-control {{ $errors->has('endDate') ? ' is-invalid' : ''}}"
                        value="{{ old('endDate') }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sponsor">Sponsor:</label>
                        <input type="text" name="sponsor" class="form-control {{ $errors->has('sponsor') ? ' is-invalid' : ''}}"
                        value="{{ old('sponsor') }}"/>
                    </div>

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection