<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';
    protected $fillable = ['id_reporte','reporte_nomb', 'reporte_desc', 'reporte_slug', 'reporte_orden', 'reporte_tipo_id', 'reporte_grupo_id'];
    protected $hidden = ['id_reporte'];
}
