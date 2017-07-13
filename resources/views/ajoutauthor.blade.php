@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_add">
    <h2>Ajouter un auteur</h2>
        {{ Form::open(['url' => '/insertauthor']) }}
        {{ Form::label('author', "Nom de l'auteur") }}
        {{ Form::text('author') }}
        {{ Form::submit('Inserer') }}
        {{ Form::close() }}
        <ul>
            @foreach($authors as $author)
                <li>{{ $author }}</li>
            @endforeach
        </ul>
</main>
@endsection