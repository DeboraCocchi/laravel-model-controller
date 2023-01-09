@extends('layout.main');

@section('content')
<div class="container-details">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title">{{$movie->title}}</h2>
        <h4 class="card-subtitle my-2 text-muted">Titolo originale: {{$movie->original_title}}</h4>
        <p class="card-text mt-5 mb-0">Paese di produzione: {{$movie->nationality}}</p>
        <p class="card-text mb-5">Voto del pubblico: {{$movie->vote}} / 10</p>

        <a href="{{route('movie-details', ($movie->id-1))}}" class="btn-warning btn mt-3"><< Film precedente</a>
        <a href="{{route('movie-details', ($movie->id+1))}}" class="btn-info btn mt-3">Film successivo >></a><br>
        <a href="{{route('film')}}" class="btn-primary btn mt-3">Torna all'elenco</a>
        </div>
  </div>
</div>

@endsection
