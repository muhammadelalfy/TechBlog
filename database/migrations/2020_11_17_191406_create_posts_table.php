<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 45);
			$table->string('content', 45);
			$table->string('image', 45);
			$table->bigInteger('user_id');
			$table->string('keywords', 45);
			$table->string('description', 45);
			$table->bigInteger('views');
			$table->tinyInteger('approved');
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}