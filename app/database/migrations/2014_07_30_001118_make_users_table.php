<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
		
			$table->increments('id');
			$table->timestamps();
			
			$table->string('username');
			$table->integer("user_id")->unsigned();
			$table->string('password');
			$table->string('email');
			$table->boolean('remember_token');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
