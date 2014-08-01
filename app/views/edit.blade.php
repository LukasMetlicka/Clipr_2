@extends("_master")
@section('title')
Edit clip
@stop
@section('head')
	<link type="text/css" rel="stylesheet" href="styles/edit.css">
@stop

@section('body')
	
	{{ Form::open(array('url' => '/add', 'method' => 'POST')) }}
		<div class="content">
			<div class="text">
				{{ Form::label("clip_text", "the content of the clip") }}
				{{ Form::text('text') }}
			</div>
			<div class="tags">
				{{ Form::label("clip_tags", "tags to sort through clips more easily!") }}
				{{ Form::text("tags") }}
			</div>
			<div class="submit">
				{{ Form::submit('Submit!', array('class' => 'name')); }}
			</div>
		</div>
	{{ Form::close() }}
	
@stop