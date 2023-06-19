<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowToArrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_to_arrives', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->text('map')->nullable();
            $table->string('title')->nullable();
            $table->text('main')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('how_to_arrives');
    }
}
