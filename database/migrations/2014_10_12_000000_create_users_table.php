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
            $table->increments('id');
            $table->string('nombres',30);
            /*
            $table->string('ci',11);
            $table->string('apellidos',30);
            $table->date('fecha_nacimiento');
            $table->char('sexo',1);
            $table->string('direccion',50);
            $table->string('telefono',11);
            $table->string('foto',255);*/
            $table->string('email',30)->unique();
            $table->string('password');
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
