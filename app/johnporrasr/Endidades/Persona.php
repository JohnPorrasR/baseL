<?php namespace App\johnporrasr\Entidades;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';

    public function cargo(){
        return $this->belongsTo('App\johnporrasr\Entidades\Cargo', 'cargo_id', 'id_cargo');
    }

   /* public function getFullNameAttribute()
    {
        return $this->apellidos.' '.$this->nombres;
    }*/

}
