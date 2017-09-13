<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            // Champs
            $table->integer('restaurant_id')->unsigned();
            $table->integer('commentaire_id')->unsigned();
            $table->integer('client_id')->unsigned();
            // Lien
            $table->foreign('restaurant_id')->references('id')->on('restaurant');
            $table->foreign('commentaire_id')->references('id')->on('commentaire');
            $table->foreign('client_id')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
