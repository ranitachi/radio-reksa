<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama_event')->nullable();
          $table->string('lokasi')->nullable();
          $table->string('pic')->nullable();
          $table->date('tanggal_event')->nullable();
          $table->text('desc')->nullable();
          $table->integer('flag')->default(0)->nullable();
          $table->integer('view')->default(0)->nullable();
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
        Schema::dropIfExists('event');
    }
}
