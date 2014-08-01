@extends("_master")
@section('title')
Sign up for Clipr
@stop
@section('head')
	<link type="text/css" rel="stylesheet" href="styles/signup.css">
@stop

@section('body')
	
	{{ Form::open(array('url' => '/signup', 'method' => 'POST')) }}
		<div class="content">
			<div class="email">
				<h2>Email:</h2>
				{{ Form::label("email", "new user's email") }}
				{{ Form::text('email') }}
			</div>
			<div class="username">
				{{ Form::label("username", "new user's username") }}
				{{ Form::text("tags") }}
			</div>
			<div class="password">
				<h2>Email:</h2>
				{{ Form::label("password", "new user's password") }}
				{{ Form::password('password') }}
			</div>
			<div class="submit">
				{{ Form::submit('Sign Up!', array('class' => 'signup')); }}
			</div>
		</div>
	{{ Form::close() }}
	
@stop