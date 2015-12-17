<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id_reporte');
            $table->string('reporte_nomb');
            $table->string('reporte_desc');
            $table->string('reporte_slug');
            $table->integer('reporte_orden');
            $table->integer('reporte_tipo_id')->unsigned();
            $table->integer('reporte_grupo_id')->unsigned();
            $table->timestamps();
            $table->foreign('reporte_tipo_id')->references('id_reporte_tipo')->on('reporte_tipos');
            $table->foreign('reporte_grupo_id')->references('id_reporte_grupo')->on('reporte_grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reportes');
    }
}
