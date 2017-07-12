@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_add">
    <h1>Ajouter un livre</h1>
    {{ Form::open(['url' => '/insertlivre']) }}
        {{ Form::label('title', 'Titre du livre') }}
        {{ Form::text('title') }}
        {{ Form::label('author', 'Auteur du livre') }}
        {{ Form::text('author') }}
        {{ Form::submit('Inserer') }}
    {{ Form::close() }}
</main>
@endsection