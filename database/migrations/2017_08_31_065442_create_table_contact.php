<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function(Blueprint $table){
          $table->increments('id');
          $table->string('title')->nullable();
          $table->string('alamat')->nullable();
          $table->string('telepon')->nullable();
          $table->string('lat')->nullable();
          $table->string('lng')->nullable();
          $table->string('email')->nullable();
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
        Schema::dropIfExists('contact');
    }
}
