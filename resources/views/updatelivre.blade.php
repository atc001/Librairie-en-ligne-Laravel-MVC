@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_add">
    <h2>Modifier un livre</h2>
        {{ Form::open(['url' => '/updatelivre_action']) }}
        {{ Form::label('title', 'Titre du livre') }}
        {{ Form::text('title', $title) }}
        {{ Form::label('author', 'Auteur du livre') }}
        {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple')) }}
        {{ Form::hidden('id', $id) }}
        {{ Form::submit('Modifier') }}
        {{ Form::close() }}
</main>
@endsection