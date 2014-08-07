<!DOCTYPE html>
< <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title = Clipr')</title>
        <meta name="description" content="Clipr">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/_master.css">
        @yield('head')
    </head>
    <body unresolved touch-action="auto">
        <?php require_once("analyticstracking.php") ?>


		@if(Session::get('flash_message'))
			<div class='flash-message'>{{ Session::get('flash_message') }}</div>
		@endif
		<div class="head-links">
			<ul>
				<li><h1><a href="/home">Home</a></h1></li>
				<li><h1><a href="/add">Add a Clip</a></h1></li>
				<li id="logout"><h1><a href="/logout">Log Out</a></h1></li>
			</ul>
		</div>
		
		@yield('body')
        
    </body>
</html>
