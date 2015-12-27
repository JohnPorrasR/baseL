<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';
    // protected $fillable = ['id_menu','part_menu','menu_nomb','menu_slug','menu_orden','menu_img','menu_ndesc'];
    // protected $hidden = [''];

    public function menuPerfil()
    {
        return $this->hasMany('App\johnporrasr\Entidades\MenuPerfile', 'menu_id', 'id_menu');
    }

}
