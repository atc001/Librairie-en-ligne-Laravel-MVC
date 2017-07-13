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
                <li><a href="/ajoutlivre">AjouterL</a></li>
            @endif
            @if (!Auth::guest())
                <li><a href="/ajoutauthor">AjouterA</a></li>
            @endif
            @if (!Auth::guest())
                <li><a href="/ecrire">Ecrire</a></li>
            @endif
            @if (!Auth::guest())
                <li><a href="/messagerie">Messagerie</a></li>
            @endif
        </ul>
    </div>
</main>
@endsection
			
