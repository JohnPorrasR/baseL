<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class MenuPerfile extends Model
{
    protected $table = 'menu_perfiles';
    protected $fillable = ['id_menu_perfil','user_id','menu_perfil_act','menu_id','perfil_user_id'];
    protected $hidden = [''];

    public function perfilUser()
    {
        return $this->hasMany('App\johnporrasr\Entidades\PerfilUser','perfil_user_id','id_perfil_user');
    }

    public function menu()
    {
        return $this->belongsTo('App\johnporrasr\Entidades\Menu', 'menu_id', 'id_menu');
    }

    public function user()
    {
        return $this->belongsTo('App\johnporrasr\Entidades\User', 'uer_id', 'id');
    }

}
