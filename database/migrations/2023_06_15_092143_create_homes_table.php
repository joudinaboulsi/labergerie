<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();

            $table->string('title_home')->nullable();
            $table->text('text_home')->nullable();
            $table->string('image_home')->nullable();
            $table->string('subtitle_home')->nullable();

            $table->string('title_info')->nullable();
            $table->text('contenetone_info')->nullable();
            $table->text('contenetwo_info')->nullable();
            $table->string('imageone_info')->nullable();
            $table->string('imagetwo_info')->nullable();
            $table->string('title_service')->nullable();
            $table->string('title1_service')->nullable();
            $table->string('title2_service')->nullable();
            $table->string('title3_service')->nullable();
            $table->text('text1_service')->nullable();
            $table->text('text2_service')->nullable();
            $table->text('text3_service')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
