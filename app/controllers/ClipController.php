<?php

class ClipController extends \BaseController {

	
	public function add()
	{
		return View::make('add');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clip
	 *
	 * @return Response
	 */
	public function store()
	{
		$id = Auth::id();
		
		$file = Input::get("text");
		$tagString = Input::get("tags");
		
		
		$tagId = findTagId( $tagString );
		
		$newFile = new Models\File();
		$newFile->text = $file;
		$newFile->save();
		
		$fileId = $newFile->id;
		
		return Redirect::to("/home")->with("flash_message", "Your new clip with the tag ".$tagId." has been created" );
				
		
		
	}

	

	/**
	 * Show the form for editing the specified resource.
	 * GET /clip/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clip/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clip/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
}

