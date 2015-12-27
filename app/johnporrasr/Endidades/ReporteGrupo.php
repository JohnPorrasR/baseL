<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class ReporteGrupo extends Model
{
    protected $table = 'reporte_tipos';
    protected $fillable = ['id_reporte_grupo','reporte_grupo_desc'];
    protected $hidden = [''];
}
