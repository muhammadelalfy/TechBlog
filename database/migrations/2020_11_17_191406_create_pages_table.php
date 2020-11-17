<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('slug', 45);
			$table->string('content', 45);
			$table->string('meta', 45);
			$table->string('description', 255);
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}