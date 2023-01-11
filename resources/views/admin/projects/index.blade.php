@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->production_date }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-primary">Mostra
                                dettagli</a>
                            <a href="" class="btn btn-secondary">Aggiorna</a>
                            <form action="" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-info">Aggiungi progetto</a>
    </div>
@endsection
