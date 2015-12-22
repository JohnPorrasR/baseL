<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\johnporrasr\Repositorios\MenuRepo;

class MenuController extends Controller
{
    protected $menuRepo;

    public function  __construct(MenuRepo $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }

    public function index()
    {
        $menu = $this->menuRepo->getMenuSuperior();
        dd($menu->toArray());
    }

}