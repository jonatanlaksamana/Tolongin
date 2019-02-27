<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idClient1')->unsigned();
          $table->integer('idClient2')->unsigned();
          $table->string('isi');
          $table->smallInteger('status');
          $table->timestamps();
          $table->foreign('idClient1')
          ->references('id')->on('users')
          ->onDelete('cascade');
          $table->foreign('idClient2')
          ->references('id')->on('users')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
