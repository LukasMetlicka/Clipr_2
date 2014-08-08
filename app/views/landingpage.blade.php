<!DOCTYPE html>
<html>
	<head> 
		<link rel="stylesheet" type="text/css" href="styles/landingpage.css">
		<title>Welcome to Clipr!</title>
	</head>
	
	<body> 
		
		<div class="content">
			<div class="title">
				<h1>Clipr.</h1>
			</div>
			<div class="signup">
				{{ Form::open(array('url' => '/signup', 'method' => 'GET')) }}
			
					{{ Form::submit('Sign Up', array('class' => 'signup')); }}
			
				{{ Form::close() }}
			</div>
			<div class="login">
				{{ Form::open(array('url' => '/login', 'method' => 'GET')) }}
			
					{{ Form::submit('Login', array('class' => 'login')); }}
				
				{{ Form::close() }}
			</div>
			
			<div class="img">
				Image here
			</div>
		</div>
	
	</body>
</html>