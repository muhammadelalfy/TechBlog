<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('post_id');
			$table->string('name', 45);
			$table->string('email', 45);
			$table->string('website', 45);
			$table->bigInteger('user_id');
			$table->string('comment', 255);
			$table->tinyInteger('approved');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}