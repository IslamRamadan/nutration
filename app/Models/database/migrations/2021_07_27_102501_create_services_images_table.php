<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesImagesTable extends Migration {

	public function up()
	{
		Schema::create('services_images', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('service_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('services_images');
	}
}