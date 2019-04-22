<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login',55);
            $table->string('email',105);
            $table->string('password',255);
            $table->enum('estado', ['ativo', 'inativo','pendente']);
            $table->enum('tipo', ['administrador', 'participante','local']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilizador');
    }
}
