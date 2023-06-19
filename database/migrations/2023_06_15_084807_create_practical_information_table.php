<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practical_information', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->string('title')->nullable();

            $table->string('imageone_living')->nullable();
            $table->string('imagetwo_living')->nullable();
            $table->string('imagethree_living')->nullable();
            $table->string('subtitle_living')->nullable();
            $table->text('text_living')->nullable();

            $table->string('imageone_kitchen')->nullable();
            $table->string('imagetwo_kitchen')->nullable();
            $table->string('imagethree_kitchen')->nullable();
            $table->string('subtitle_kitchen')->nullable();
            $table->text('text_kitchen')->nullable();

            $table->string('imageone_bed')->nullable();
            $table->string('subtitle1_bed')->nullable();
            $table->text('text1_bed')->nullable();
            $table->string('imagetwo_bed')->nullable();
            $table->string('subtitle2_bed')->nullable();
            $table->text('text2_bed')->nullable();
            $table->string('imagethree_bed')->nullable();
            $table->string('subtitle3_bed')->nullable();
            $table->text('text3_bed')->nullable();

            $table->string('imageone_bath')->nullable();
            $table->string('subtitle1_bath')->nullable();
            $table->text('text1_bath')->nullable();
            $table->string('imagetwo_bath')->nullable();
            $table->string('subtitle2_bath')->nullable();
            $table->text('text2_bath')->nullable();
            $table->string('one_title')->nullable();
            $table->string('outside_one_title')->nullable();
            $table->text('outside_one_text')->nullable();
            $table->string('outside_one_big')->nullable();
            $table->string('sec_title')->nullable();
            $table->string('sec_image1')->nullable();
            $table->string('sec_image2')->nullable();
            $table->string('sec_image3')->nullable();
            $table->string('gallery_title')->nullable();
            $table->text('gallery_text')->nullable();
            $table->string('info_title')->nullable();
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
        Schema::dropIfExists('practical_information');
    }
}
