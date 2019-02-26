<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idClient')->unsigned();
            $table->integer('idPemberiJasa')->unsigned();
            $table->timestamps();
            $table->foreign('idClient')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('idPemberiJasa')->references('id')->on('request_order_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_models');
    }
}
