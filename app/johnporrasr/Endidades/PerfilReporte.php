<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class PerfilReporte extends Model
{
    protected $table = 'perfil_reportes';
    protected $fillable = ['id_perfil_reporte','reporte_id','perfil_user_id'];
    protected $hidden = [''];
}
