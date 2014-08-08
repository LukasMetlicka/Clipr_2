@extends("_master")

@section("title")
Home
@stop

@section("head")
<link rel="stylesheet" type="text/css" href="styles/home.css">
@stop
@if ( $files )
@foreach($files as $clip => $tag )
	<div class="clip">
		<div class="text">
			<p>{{ $clip["text"] }}</p>
		</div>
		<div class="tag">
			<p>{{ $tag }}</p>
		</div>
	</div>
@endforeach
@endif