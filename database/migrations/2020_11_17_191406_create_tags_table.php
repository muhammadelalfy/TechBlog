<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 45);
			$table->string('slug', 45);
			$table->string('keywords', 45);
			$table->string('description', 45);
		});
	}

	public function down()
	{
		Schema::drop('tags');
	}
}