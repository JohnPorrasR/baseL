<?php namespace App\johnporrasr\Repositorios;

use App\johnporrasr\Entidades\Menu;

class MenuRepo extends BaseRepo
{

    public function getModel()
    {
        return new Menu;
    }

    public function getAll()
    {
        return Menu::where('part_menu', '=', 'principal')->get();
    }

    public function getMenuSuperior()
    {
        $menu = Menu::where('part_menu', '=', 'principal')->with('menuPerfil', 'menu_perfiles.perfilUser')->get();
        dd($menu->toArray());
    }
}