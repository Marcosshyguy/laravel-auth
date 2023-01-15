@extends('layouts.admin');

@section('content')
    <div class="container">
        <h2>Dettagli del progetto {{ $project->title }}</h2>
        <p>Ultimo aggiornamento: {{ $project->production_date }}</p>
        <p>Descrizione: {{ $project->description }}</p>
        <p>Linguaggi usati: {{ $project->languages_used }}</p>
        <p>Immagine:</p>
        <div>
            @if ($project->new_image)
                {
                <img src="{{ asset('storage/' . $project->new_image) }}" alt="{{ $project->slug }}-image">
                }
            @else
                <img src="{{ asset('storage/images/not-found.jpeg') }}" alt="not-found">
            @endif



        </div>
    </div>
@endsection
