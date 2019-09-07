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

        @if(!isset($vacancies))
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
                @include('vacancy.deleteVacancy')
                <!-- End of the Delete Modal -->
            @endforeach
        @else
            <div class="card">
                <div class="card-body">
                    <h3 class="text-justified-center">There is no Vacancy!</h3>
                </div>
            </div>
        @endif
    </div>
@endsection