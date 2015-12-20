<?php namespace App\johnporrasr\Repositorios;

abstract class BaseRepo
{

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();
    abstract public function getAll();

    public function find($id)
    {
        return $this->model->find($id);
    }

}