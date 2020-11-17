<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 45);
			$table->string('email', 45);
			$table->string('message', 255);
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}