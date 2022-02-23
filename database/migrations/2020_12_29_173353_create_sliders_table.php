<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->tinyInteger('activity')->nullable()->default('1');
			$table->integer('num');
			$table->string('img', 400);
		});
	}

	public function down()
	{
		Schema::drop('sliders');
	}
}