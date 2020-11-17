<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 45);
			$table->string('email', 45);
			$table->string('password', 45);
			$table->tinyInteger('approved');
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}