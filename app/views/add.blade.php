@extends("_master")

@section('title')
Add a clip
@stop

@section('head')
	<link type="text/css" rel="stylesheet" href="styles/add.css">
@stop

@section('body')
	<div class="content">
		{{ Form::open(array('url' => '/add', 'method' => 'POST')) }}
				<div class="text">
					<h2>Put the text for your clip here! make sure you only use * characters!</h2>
					{{ Form::textarea('text') }}
				</div>
				<div class="tags">
					<h2>Put a tag here! preface it with a #, and make sure you don't put spaces in it!</h2>
					{{ Form::text("tags") }}
				</div>
				<div class="submit">
					{{ Form::submit('Submit!', array('class' => 'submit')); }}
				</div>
		{{ Form::close() }}
	</div>
	
@stop