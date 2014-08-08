@extends("_master")

@section("title")
Home
@stop

@section("head")
<link rel="stylesheet" type="text/css" href="styles/home.css">
@stop
@section("body")

	@if ( $files )
		@foreach( $files as $clip )
			<div class="clip">
				<div class="text">
					<p>{{ $clip }}</p>
				</div>
			</div>
		@endforeach
	@endif 
@stop