<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class ReporteTipo extends Model
{
    protected $table = 'reporte_tipos';
    protected $fillable = ['id_reporte_tipo','reporte_tipo_desc', 'reporte_icon'];
    protected $hidden = [''];
}
