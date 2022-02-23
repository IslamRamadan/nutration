<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOversTable extends Migration {

	public function up()
	{
		Schema::create('overs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->tinyInteger('activity')->nullable()->default('1');
			$table->integer('num')->nullable();
			$table->string('img', 400)->nullable();
			$table->string('text', 300)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('overs');
	}
}