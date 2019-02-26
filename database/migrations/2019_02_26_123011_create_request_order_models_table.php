<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestOrderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_order_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idClient')->unsigned();
            $table->string('namaJasa');
            $table->float('harga');
            $table->timestamps();
            $table->foreign('idClient')
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
        Schema::dropIfExists('request_order_models');
    }
}
