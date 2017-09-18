<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->integer('cp')->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->string('email')->unique();
            $table->string('tel')->nullable();
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();
            $table->string('role')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
