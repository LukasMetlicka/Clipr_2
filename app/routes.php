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

	$id = Auth::id();
	$userData = User::find( $id );
	$userName = $userData["username"];
	$userEmail = $userData["email"];
	## Get all files attached to this user arranged by date added
	## Get all tags attached to the files
	$files = Auth::user()->files;
	
	
	
	return View::make('home')->with( "id", $id )
							 ->with("userName", $userName )
							 ->with("userEmail", $userEmail )	##  Planned to do more with this, id and username
							 ->with( "files", $files );
}));


//Login page
Route::get('/login', array( 'before' => 'guest', function()
{
	return View::make('login');
}));


//Login Post
Route::post('/login', array('before' => "csrf",  function()
{
	$credentials = Input::only("username", "password");
	
	if ( Auth::attempt($credentials)) {
		
		return Redirect::intended('/home')->with('flash_message', 'Greetings, Friend' );
	}
	else {
		return  Redirect::to('/login')->with('flash_message', 'Not so fast there bucko.  Lets try that again.');
	}
	
	return Redirect::to('login');
	
}));


//Logout
Route::get( '/logout', function() {

	Auth::logout();
	
	return Redirect::to('/')->with('flash', 'live long, and prosper.' );
	
});


//Signup
Route::get('/signup', array('before' => 'guest', function(){
	
	return View::make('signup');
	
}));


//Signup post
Route::post( '/signup', array( 'before' => 'csrf', function(){

	
	
	$user = new user;
	$user->email = Input::get('email');
	$user->password = Hash::make(Input::get('password'));
	$user->username = Input::get('username');
	
	try {
		$user->save();
	}
	catch ( Exception $e ) {
		return Redirect::to('/signup')
							->with('flash_message',"I'm not sure I got all of that partner. would you mind repeating yourself?")
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
	
	$id = Auth::id();
	$userFileIds = DB::table("file_user")->where( "user_id", "=", $id )->get();
	
	if ( $userFileIds == clipid ) {
		
		$fileId = DB::table("file_user")->where( "file_id", "=", $clipid );
		$file = DB::table( "files" )->where( "id", "=", $fileId )->pluck("text");
		
	}
	else {
		return Redirect::to('/home')->with("flash_message", "Sorry, But I don't think you have that clip");
	}
	
}));


//Edit Clip Post
Route::post('/edit/{clipid}', array( 'before' => 'csrf', function() {
	
	
	
}));


Route::get("/tags","hashtagController@index");
Route::get("/tag{id}","hashtagController@show");

Route::get("/add", "ClipController@add");
Route::post("/add", "ClipController@store");


Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});


function findTagId( $stringOfTags ) {
	
 	$files = Auth::user()->files; 
	
	
	
	$tagArray = explode(" ", $stringOfTags);
	
	foreach ( $files as $file ) {
		$fileTags = $file->tags;
		
		foreach( $fileTags as $tagInFile ) {
			if ( array_search( $tagArray, $tagInFile ) ) {
				
				return $existingTag->id;
			}
			else {
					$newTag = new Tag();
					$newTag->tag = $tagArray;
					$newTag->save();
					
					return $newTag->id;
			}
		}
		
		
	}

}


