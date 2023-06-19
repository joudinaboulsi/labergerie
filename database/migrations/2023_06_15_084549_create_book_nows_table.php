<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_nows', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('image_one')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('person')->nullable();
            $table->string('from_day')->nullable();
            $table->string('from_month')->nullable();
            $table->string('to_day')->nullable();
            $table->string('to_month')->nullable();
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
        Schema::dropIfExists('book_nows');
    }
}
