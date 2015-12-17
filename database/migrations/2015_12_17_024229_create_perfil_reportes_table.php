<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_reportes', function (Blueprint $table) {
            $table->increments('id_perfil_reporte');
            $table->integer('reporte_id')->unsigned();
            $table->integer('perfil_user_id')->unsigned();
            $table->timestamps();
            $table->foreign('reporte_id')->references('id_reporte')->on('reportes');
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
        Schema::drop('perfil_reportes');
    }
}
