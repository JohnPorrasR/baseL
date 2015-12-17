<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_perfiles', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->integer('user_id');
            $table->integer('mperfil_act');
            $table->integer('menu_id')->unsigned();
            $table->integer('perfil_user_id')->unsigned();
            $table->timestamps();
            $table->foreign('menu_id')->references('id_menu')->on('menus');
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
        Schema::drop('menu_perfiles');
    }
}
