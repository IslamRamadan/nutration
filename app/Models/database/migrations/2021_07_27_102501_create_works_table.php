<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('icon', 90);
			$table->string('title_en', 90);
			$table->string('title_ar', 90);
			$table->string('content_en', 90);
			$table->string('content_ar', 90);
			$table->integer('type');
		});
	}

	public function down()
	{
		Schema::drop('works');
	}
}