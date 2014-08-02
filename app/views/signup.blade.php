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
				{{ Form::label("email", "Email:") }}
				{{ Form::text('email') }}
			</div>
			<div class="username">
				{{ Form::label("username", "Username:") }}
				{{ Form::text("tags") }}
			</div>
			<div class="password">				{{ Form::label("password", "Password:") }}
				{{ Form::password('password') }}
			</div>
			<div class="submit">
				{{ Form::submit('Sign Up!', array('class' => 'signup')); }}
			</div>
		</div>
	{{ Form::close() }}
	
@stop