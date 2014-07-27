<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Landing Page
Route::get('/', function()
{
	return View::make('landingpage');
});


//Home page
Route::get('/home', array('before' => 'auth', function(){
	
	return View::make('home');
	
}));


//Login page
Route::get('/login', array( 'before' => 'guest', function()
{
	return View::make('login');
}));


//Login Post
Route::post('/login', array('before' => "csrf",  function()
{
	$credentials = Input::only('email', 'password' );
	
	if ( Auth::attempt($credentials, $remember = true )) {
		return Redirect::intended('/home')->with('flash', 'Greetings, Friend' );
	}
	else {
		return  Redirect::to('/login')->with('flash', 'Not so fast there bucko.  Lets try that again.');
	}
	
	return Redirect::to('login');
	
}));


//Logout
Route::get( '/logout', function() {

	Auth::logout();
	
	return Redirect::to('/')->with('flash', 'live long, and prosper.' );
	
});


//Signup
Route::get('/signup' array('before' => 'guest', function(){
	
	return View::make('signup');
	
}));


//Signup post
Route::post( '/signup', array( 'before' => 'csrf', function(){

	$user = new User;
	$user->email = Input::get('email');
	$user->password = Hash::make(Input::get('password'));
	$user->username = Input::get('username');
	$user->ip = Input::get('ip');
	
	try {
		$user->save();
	}
	catch ( Exception $e ) {
		return Redirect::to('/signup')
							->with('flash',"I'm not sure I got all of that partner. would you mind repeating yourself?")
							->withInput();
	}
	
	Auth::login($user);
	return Redirect::to('/home')->with('flash', 'Welcome to clipr! sorry about all the mess');
	
}));


//Add Clip
Route::get('/add', array('before' => 'auth', function(){

	return View::make('add');
	
}));


//Add Clip Post
Route::post('/add', array('before' => 'csrf', function(){
	
	$clip = new Clip;
	$clip->text = Input::get('text');
	$clip->user = $user->username;
	
	try {
		$clip->save();
	}
	catch ( Exception $e ) {
		return Redirect::to('/add')->with('flash',"I'm sorry Dave, I can't let you do that");
	}
	
	return Redirect::to('/home')->with('flash','Clip added!');
	
	
}));


//Edit Clip
Route::get('/edit{clipid}', array('before' => 'auth', function(){
	
	
	
}));


//Edit Clip Post
Route::post('/edit/{clipid}', array( 'before' => 'csrf', function() {
	
	
	
}));