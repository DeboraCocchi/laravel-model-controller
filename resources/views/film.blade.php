@extends('layout.main')

@section('content')
    <h1 class="text-warning">I tuoi film:</h1>
    <div class="dc-container">
        <div class="container-fluid">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-2 p-2">
                    <a href="{{ route('movie-details', $movie->id)}}">
                        <div class="card">
                            <img src="{{$movie->img}}" class="card-img-top" alt="{{$movie->title}}">
                            <div class="card-body text-center d-flex flex-column justify-content-center">
                              <h4 class="card-title">{{$movie->title}}</h4>
                              <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                              <p class="card-text">{{$movie->nationality}} || {{$movie->vote}}</p>
                            </div>
                        </div>
                    </a>

                </div>


                @endforeach
            </div>
        </div>
    </div>
@endsection
