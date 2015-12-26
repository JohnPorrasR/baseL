<?php namespace App\johnporrasr\Procedures;

class MenuProcedure {

    public function getmenu($id){
        return \DB::select('call paListaMenu(?)', array($id));
    }

}