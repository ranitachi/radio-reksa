<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyiar', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama');
          $table->string('photo')->nullable();
          $table->text('desc')->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('linkedin')->nullable();
          $table->integer('id_user')->unsigned()->nullable();
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
        Schema::dropIfExists('penyiar');
    }
}
