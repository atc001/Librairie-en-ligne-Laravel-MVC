@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_accueil">
    <div id="titre">
        <h2>Accueil</h2>
    </div>
    <div id="list">
        <ul>
            <li><a href="/lister">Lister</a></li>
            @if (!Auth::guest())
                <li><a href="/ajoutlivre">Ajouter</a></li>
            @endif
        </ul>
    </div>
</main>
@endsection
			
