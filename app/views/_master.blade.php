<!DOCTYPE html>
< <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title = Clipr')</title>
        <meta name="description" content="Clipr">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/_master.css">
        <link rel="import" href="components/paper-elements/paper-elements.html">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        @yield('head')
    </head>
    <body unresolved touch-action="auto">
        <?php require_once("analyticstracking.php") ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

		@if(Session::get('flash_message'))
			<div class='flash-message'>{{ Session::get('flash_message') }}</div>
		@endif
		<core-header-panel>
			<core-toolbar>
			
				<paper-tabs id="tabs" valueattr="name" selected="all" self-end>
					<paper-tab name="home">Home</paper-tab>
					<paper-tab name="add">Add</paper-tab>
					<paper-tab name="groups">groups</paper-tab>
					<paper-tab name="weiner">Log Out</paper-tab>
				</paper-tabs>
			
			</core-toolbar>
			
			
			
		</core-header-panel>
		
		@yield('body')
	
	<script>
		  var tabs = document.querySelector('paper-tabs');
		
		  tabs.addEventListener('core-select', function() {
		    console.log("Selected: " + tabs.selected);
		  });
	</script>
        
    </body>
</html>
