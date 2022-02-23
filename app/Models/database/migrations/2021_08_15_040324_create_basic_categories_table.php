<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('content_ar');
            $table->text('content_en');
            $table->string('img')->nullable();
            $table->string('background_img')->nullable();
            $table->text('section1_en')->nullable();
            $table->text('section1_ar')->nullable();
            $table->string('section2_title_en')->nullable();
            $table->string('section2_title_ar')->nullable();
            $table->string('section2_content_ar')->nullable();
            $table->string('section2_content_en')->nullable();
            $table->string('section2_img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_categories');
    }
}
