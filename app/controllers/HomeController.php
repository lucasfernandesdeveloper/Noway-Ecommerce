<?php

use App\Controllers\UsuarioController; 

class Home extends Controller
{
    public function index($param)
    {
        $header = $this->componente('header');
        $head = $this->componente('head');

        /*$this->view('home/index', ['name' => $param[0]]);*/
        $this->view('home/index', ['header' => $header, 'head' => $head]);
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
        $head = $this->componente('head');
        $this->view('componentes/header', ['head' => $head]);
    }


}