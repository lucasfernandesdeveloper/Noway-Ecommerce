<?php
use Illuminate\Database\Eloquent\Model as Model;


class Componente extends Controller{
    public function head(){
        $this->include('head');
    }

    public function header(){
        $this->include('header');
    }
}