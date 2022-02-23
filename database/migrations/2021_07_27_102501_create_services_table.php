<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_en', 90);
			$table->string('name_ar', 90);
			$table->string('content_en', 90);
			$table->string('content_ar', 90);
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}