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
		$clip = new Clip;
		$clip->text = Input::get('text');
		$clip->user = $user->username;
	
		public function parseTags( $tagString ) {
		
			$tagArray = explode(" ",  $tagString );
			$tagArrayCount = count( $tagArray );
		
			for ( $i = 0; $i < $tagArrayCount; $i++ ) {
			
				if ( substr($tagArray[$i], 0, 1 ) === "#" ) {
					
					$check = checkForHashtag( $i );
					
					if ( $check == False ) {
						
						$tag = new Tag;
						$tag->tag = $tagArray[$i];
						
					}	
				}
			
			}
	
		}
		
		try {
			$clip->save();
		}
		catch ( Exception $e ) {
			return Redirect::to('/add')->with('flash',"I'm sorry Dave, I can't let you do that");
		}
		
		return Redirect::to('/home')->with('flash','Clip added!');
		
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