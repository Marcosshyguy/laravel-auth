@extends('layouts.app');

@section('content')
    <div class="container">
        <h2>Dettagli del progetto {{ $project->title }}</h2>
        <p>Ultimo aggiornamento: {{ $project->production_date }}</p>
        <p>Descrizione: {{ $project->description }}</p>
        <p>Linguaggi usati: {{ $project->languages_used }}</p>
    </div>
@endsection
