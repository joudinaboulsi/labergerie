<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->string('page_titleDetail')->nullable();
            $table->string('page_subtitleDetail')->nullable();
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
        Schema::dropIfExists('book_pages');
    }
}
