<?php
use App\Models\Usuario;

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function include($include){
        include('../app/views/componentes/' .$include . '.php');
    }
}