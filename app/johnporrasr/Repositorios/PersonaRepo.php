<?php namespace App\johnporrasr\Repositorios;

use App\johnporrasr\Entidades\Persona;

class PersonaRepo extends BaseRepo
{

    public function getModel()
    {
        return new Persona;
    }

    public function getAll()
    {
        return Persona::all();
    }

    public function findLatest($take = 10)
    {
        $personas = Persona::select('id_persona', 'nombres','apellidos', 'cargo_id')
                                    ->with([
                                        'cargo' => function($q) use ($take){
                                            $q->take($take);
                                            $q->orderBy('created_at', 'DESC');
                                        },
                                        'cargo.getPerfilUser'])
                             ->get();
        // dd($personas->toArray());
        return $personas;
    }
}















