<header>
	<h1>Librairie</h1>
	<ul>
		<li><a href="/">Accueil</a></li>
		@if (Auth::guest())
            <li><a href="{{ route('login') }}">Connexion</a></li>
		@else
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Deconnexion
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
				</form>
			</li>
		@endif
		@if (Auth::guest())
		<li><a href="/register">Inscription</a></li>
		@endif
	</ul>
</header>
