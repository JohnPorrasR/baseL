<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class PerfilUser extends Model
{
    protected $table = 'perfil_users';
    protected $primaryKey = 'id_perfil_user';
    // protected $fillable = ['id_perfil_user','perfil_desc'];
    protected $hidden = ['created_at', 'updated_at'];
}
