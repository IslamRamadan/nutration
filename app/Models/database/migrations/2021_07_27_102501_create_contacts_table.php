<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 90);
			$table->integer('phone');
			$table->string('email', 90);
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}