<?php

class hashtagController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	 public function __construct( ) {
		
		$this->beforeFilter("auth");
		 
	 }
	 
	public function index()
	{
		$tags = Tag::all(); 
		return View::make('hashtag_index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		DB::insert();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tags = Tag::all()->where( $id, "=", "tag" )->get("id");
		$filePivot = DB::table("file_tag")->where( $tags, "=", "tag_id" )->get("file_id");
		$file = File::all()->where( $filePivot, "=", "id" );
		
		return View::make('tag_list')->with($thisTag);
	}




}
