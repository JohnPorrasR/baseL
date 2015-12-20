<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $primaryKey = 'id_cargo';
    // protected $fillable = ['id_cargo', 'cargo_desc', 'perfil_user_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function persona(){
        return $this->hasOne('App\johnporrasr\Entidades\Persona','cargo_id');
    }

    public function getPerfilUser()
    {
        return $this->belongsTo('App\johnporrasr\Entidades\PerfilUser','perfil_user_id','id_perfil_user');
    }

}
