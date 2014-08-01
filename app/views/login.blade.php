@extends _master
@section('title')
Login to Clipr
@stop
@section('head')
	<link type="text/css" rel="stylesheet" href="styles/login.css">
@stop

@section('body')
	
	{{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
		<div class="content">
			<div class="username">
				<h2>Username</h2>
				{{ Form::label("username", "the user's username") }}
				{{ Form::text('username') }}
			</div>
			<div class="password">
				<h2>Password:</h2>
				{{ Form::label("password", "super-secret password") }}
				{{ Form::password("password") }}
			</div>
			<div class="submit">
				{{ Form::submit('Login', array('class' => 'login')); }}
			</div>
		</div>
	{{ Form::close() }}
	
@stop