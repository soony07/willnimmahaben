@extends('layout.main')

@section('seo')
<title>Registrieren</title>
@stop

@section('content')
<br /><h4>Registrieren</h4><br />

@if(Session::has('success'))
<div class="alert alert-success">
	<strong>Super!</strong> Bitte schauen Sie in das von Ihnen angegebene E-Mail-Postfach. Sie erhalten in Kürze eine E-Mail vom Uns mit aktivierungscode.
</div>
@else
@if(Session::has('unex-error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Error!</strong> Bitte versuchen Sie später wieder.
</div>
@endif
<form method="post" action="{{ URL::route('sign-up-post') }}" role="form"> 

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label for="inputName">Name:</label>
		<input type="text" class="form-control" id="inputName" placeholder="Vorname-Nachname" name="name"{{ Input::old('name') ? ' value="'. Input::old('name') .'"' : '' }} />
		@if($errors->has('name'))
		<span class="help-block">
			@foreach($errors->get('name') as $message)
			{{ $message }} 
			@endforeach
		</ul></span>
		@endif
	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="inputEmail">Email:</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="mein@email.com" name="email"{{ Input::old('email') ? ' value="'. Input::old('email') .'"' : '' }} />
		@if($errors->has('email'))
		<span class="help-block">
			@foreach($errors->get('email') as $message)
			{{ $message }} 
			@endforeach
		</ul></span>
		@endif
	</div>

	<div class="form-group{{ ($errors->has('password') || $errors->has('password_again')) ? ' has-error' : '' }}">
		<label for="inputPassword">Passwort:</label>
		<input type="password" class="form-control" id="inputPassword" name="password" />
		@if($errors->has('password'))
		<span class="help-block">
			@foreach($errors->get('password') as $message)
			{{ $message }} 
			@endforeach
		</ul></span>
		@endif
	</div>

	<div class="form-group{{ $errors->has('password_again') ? ' has-error' : '' }}">
		<label for="inputPasswordAgain">Passwort erneut eingeben:</label>
		<input type="password" class="form-control" id="inputPasswordAgain" name="password_again" />
		@if($errors->has('password_again'))
		<span class="help-block">
			@foreach($errors->get('password_again') as $message)
			{{ $message }} 
			@endforeach
		</ul></span>
		@endif
	</div>

	<button type="submit" class="btn btn-primary">Registrieren</button>
	
	{{ Form::token() }}

</form>

@endif
@stop