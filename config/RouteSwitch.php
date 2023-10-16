<?php

abstract class RouteSwitch
{
    public function home()
    {
        require __DIR__ . '/../app/views/Formulario/Tela_Cadastro.html';
    }

    public function about()
    {
        require __DIR__ . '/../app/views/Formulario/Tela_Cadastro.html';
    }

    public function contact()
    {
        require __DIR__ . '/../app/views/home/index.html';
    }
    
    public function __call($name, $arguments)
    {
        echo "O método '$name' não está definido nesta classe. ";
    }
}