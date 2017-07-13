@extends('layout.baseLayout')
@section('title', 'Ecrire')
@section('content')
<main id="main_ecrire">
        <h2>Ecrivez votre message</h2>
        {{ Form::open(['url' => '/newmessage']) }}

        {{ Form::label('Destinataire', 'Votre Destinataire') }}
        {{ Form::select('name', $names) }}

        {{ Form::label('emetteur', 'Votre nom') }}
        {{ Form::text('emetteur') }}

        {{ Form::label('message', 'Votre message') }}
        {{ Form::textarea('message') }}

        {{ Form::submit('Envoyer') }}
        {{ Form::close() }}
</main>
@endsection
			
