<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function(Blueprint $table){
            $table->rename('users');
        });
        Schema::table('commentaire', function(Blueprint $table){
            $table->rename('commentaires');
        });
        Schema::table('restaurant', function(Blueprint $table){
            $table->rename('restaurants');
        });
        Schema::table('reservation', function(Blueprint $table){
            $table->rename('reservations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->rename('clients');
        });
        Schema::table('commentaires', function(Blueprint $table){
            $table->rename('commentaire');
        });
        Schema::table('restaurants', function(Blueprint $table){
            $table->rename('restaurant');
        });
        Schema::table('reservations', function(Blueprint $table){
            $table->rename('reservation');
        });
    }
}
