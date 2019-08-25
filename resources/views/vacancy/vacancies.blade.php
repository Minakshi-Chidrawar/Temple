@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>Priest Services</h1>

        @if(Auth::check() && Auth::user()->role == 'admin')
        <div class="row mb-4 mt-2">
            <button class="btn btn-success"> <a href="{{ route('vacancy.create') }}">
                Add Vacancy</a>
            </button>
        </div>
        @endif

        @if(!empty($vacancies))
            @foreach($vacancies as $vacancy)
                <div class="bs-callout back-color">
                    <h4>
                        {{ $vacancy->title }}:<br>
                        {{ $vacancy->postDate }}
                    </h4>

                    <p>
                        @if(!empty($vacancy->role))
                            <h4>{{ $vacancy->role }}</h4>
                        @endif
                        {!! $vacancy->description !!}

                        <strong>Closing date</strong>: {{ $vacancy->closingDate }}
                        <br>
                        <strong>Email</strong>: <b class="email">{{ $vacancy->email }}</b> and <b class="email">www.matajitemple.com - {{ $vacancy->mobile }}</b>
                        <br>
                        @if(!empty($vacancy->note))
                        <strong>NOTE</strong>: {{ $vacancy->note }}
                        @endif
                    </p>

                    @if(Auth::check() && Auth::user()->role == 'admin')
                    <div class="row">
                        <div class="btn btn-group">
                            <button type="submit" class="btn btn-success btn-sm"><a href="{{ route('vacancy.edit', [$vacancy->id]) }}">Edit</a></button>
                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{ $vacancy->id }}">Delete</button>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Delete Modal -->
                <div class="modal fade" id="exampleModal{{ $vacancy->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form action="/vacancy/{{ $vacancy->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $vacancy->id }}">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of the Delete Modal -->
            @endforeach
        @endif
    </div>
@endsection