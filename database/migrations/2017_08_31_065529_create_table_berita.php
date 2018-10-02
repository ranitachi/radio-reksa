<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('berita', function(Blueprint $table){
        $table->increments('id');
        $table->string('title')->nullable();
        $table->text('desc')->nullable();
        $table->string('file')->nullable();
        $table->integer('view')->default(0);
        $table->integer('flag')->default(0);
        $table->integer('id_kategori')->unsigned()->nullable();
        $table->timestamps();
        $table->softdeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
