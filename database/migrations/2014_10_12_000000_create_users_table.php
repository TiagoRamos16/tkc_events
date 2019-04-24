<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login',55);
            $table->string('email',105)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->enum('estado', ['ativo', 'inativo','pendente']);
            $table->enum('tipo', ['administrador', 'participante','local']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
