<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class MenuPerfile extends Model
{
    protected $table = 'menu_perfiles';
    protected $fillable = ['id_menu_perfil','user_id','menu_perfil_act','menu_id','perfil_user_id'];
    protected $hidden = [''];
}
