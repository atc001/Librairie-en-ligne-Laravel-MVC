@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_add">
    <h2>Ajouter un livre</h2>
        {{ Form::open(['url' => '/insertlivre']) }}
        {{ Form::label('title', 'Titre du livre') }}
        {{ Form::text('title') }}
        {{ Form::label('author', 'Auteur du livre') }}
        {{ Form::select('author', $authors) }}
        {{ Form::submit('Inserer') }}
        {{ Form::close() }}
</main>
@endsection