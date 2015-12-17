<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id_cargo');
            $table->string('cargo_desc');
            $table->integer('perfil_user_id')->unsigned();
            $table->timestamps();
            $table->foreign('perfil_user_id')->references('id_perfil_user')->on('perfil_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargos');
    }
}
