<nav>
	<ul class="list-inline">


		@if(Request::is('/'))

			<li><em>Home</em></li>
		@else
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		@endif

		@if(Auth::check())
			@if(Request::is('account/change-password'))
			<li><em>Passwort ändern</em></li>
			@else
			<li><a href="{{ URL::route('change-password') }}">Passwort ändern</a></li>
			@endif

			<li><a href="{{ URL::route('sign-out') }}">Ausloggen</a></li>
		@else
			@if(Request::is('account/sign-in'))
			<li><em>Einloggen</em></li>
			@else
			<li><a href="{{ URL::route('sign-in') }}">Einloggen</a></li>
			@endif

			@if(Request::is('account/sign-up'))
			<li><em>Registrieren</em></li>
			@else
			<li><a href="{{ URL::route('sign-up') }}">Registrieren</a></li>
			@endif
		@endif
	</ul>
</nav>