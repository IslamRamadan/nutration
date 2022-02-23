<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1_ar')->nullable();
            $table->string('title1_en')->nullable();
            $table->string('name1_ar')->nullable();
            $table->string('name1_en')->nullable();
            $table->string('content1_ar')->nullable();
            $table->string('content1_en')->nullable();
            $table->string('title2_en')->nullable();
            $table->string('title2_ar')->nullable();
            $table->string('content2_ar')->nullable();
            $table->string('content2_en')->nullable();
            $table->string('title3_ar')->nullable();
            $table->string('title3_en')->nullable();
            $table->string('name3_ar')->nullable();
            $table->string('name3_en')->nullable();
            $table->string('content3_ar')->nullable();
            $table->string('content3_en')->nullable();
            $table->string('contact_name_ar')->nullable();
            $table->string('contact_name_en')->nullable();
            $table->text('contact_content_ar')->nullable();
            $table->text('contact_content_en')->nullable();

            $table->string('qoute1_ar')->nullable();
            $table->string('qoute1_en')->nullable();
            $table->string('qoute2_ar')->nullable();
            $table->string('qoute2_en')->nullable();


            $table->string('product1_name_en')->nullable();
            $table->string('product1_name_ar')->nullable();
            $table->string('product1_title_en')->nullable();
            $table->string('product1_title_ar')->nullable();
            $table->string('product1_content_en')->nullable();
            $table->string('product1_content_ar')->nullable();
            $table->string('products_title_en')->nullable();
            $table->string('products_title_ar')->nullable();


            $table->string('posts_title_en')->nullable();
            $table->string('posts_title_ar')->nullable();


            $table->string('about_title_en')->nullable();
            $table->string('about_title_ar')->nullable();


            $table->string('contacts_title_en')->nullable();
            $table->string('contacts_title_ar')->nullable();




            $table->text('description_en')->nullable();

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
        Schema::dropIfExists('sections');
    }
}
