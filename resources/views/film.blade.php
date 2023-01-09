@extends('layout.main')

@section('content')
    <h1>I tuoi film:</h1>
    <div class="dc-container">
        <div class="container-fluid">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-2 p-2">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{$movie->title}}</h5>
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
