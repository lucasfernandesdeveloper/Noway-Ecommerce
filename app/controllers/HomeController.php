<?php

use App\Controllers\UsuarioController; 

class Home extends Controller
{
    public function index(string $name = '')
    {
       /* $user = $this->model('Usuario');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);*/
        $this->view('home/index');
    }

    public function cadastro()
    {
       /* $user = $this->model('Usuario');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);*/
        $this->view('cadastro/cadastro');
    }



}