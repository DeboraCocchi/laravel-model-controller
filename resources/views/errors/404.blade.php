@extends('layout.main')

@section('content')
<div class="container-details">
    <h1>Errore 404</h1>
    <p>La risorsa non è presente :( </p>
    <a href="{{route('film')}}" class="btn-primary btn mt-3">Torna all'elenco dei film</a>
</div>

@endsection
