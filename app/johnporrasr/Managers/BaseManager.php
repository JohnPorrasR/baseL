<?php

abstract class BaseManager
{
    protected $entidad;
    protected $data;
    protected $erros;

    public function __construct($entidad, $data)
    {
        $this->entidad = $entidad;
        $this->data = $data;
    }

    abstract public function getRules();

    public function isValid(){
        $rules = $this->getRules();
        $validation = \Validator::make($this->data, $rules);
        $isValid = $validation->pases();
        $this->erros = $validation->messages();
        return $isValid;
    }

    public function getErrors(){
        return $this->erros;
    }

    public function save(){
        $this->entidad->fill($this->data);
        $this->entidad->save();
        return $this->data;
    }

}