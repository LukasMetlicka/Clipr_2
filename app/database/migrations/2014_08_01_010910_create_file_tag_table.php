<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('file_tag', function(Blueprint $table)
		{
			$table->increments("id");
			
			$table->foreign("file_id");
			$table->foreign("tag_id");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('file_tag', function(Blueprint $table)
		{
			//
		});
	}

}
