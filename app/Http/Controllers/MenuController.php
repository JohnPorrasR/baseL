<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\johnporrasr\Repositorios\MenuRepo;
use App\johnporrasr\Procedures\MenuProcedure;

class MenuController extends Controller
{
    protected $menuRepo;
    protected $menuProcedure;

    public function  __construct(MenuRepo $menuRepo, MenuProcedure $menuProcedure)
    {
        $this->menuRepo = $menuRepo;
        $this->menuProcedure = $menuProcedure;
    }

    public function index()
    {
        $menu = $this->menuProcedure->getMenu(1);
        dd($menu);
    }

}