<?php

use App\Controllers\UsuarioController; 

class Home extends Controller
{
    public function index($param)
    {

        $this->view('home/index', ['name' => $param[0]]);
        $this->view('home/index');
    }

    public function cadastro()
    {
       /* $user = $this->model('Usuario');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);*/
        $this->view('cadastro/cadastro');
    }

    public function header()
    {
       /* $user = $this->model('Usuario');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);*/
        $this->view('componentes/header');
    }


}