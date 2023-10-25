<?php

class Home extends Controller
{
    public function index(string $name = '')
    {
       /* $user = $this->model('Usuario');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);*/
        $this->view('home/index');
    }

    public function create($username = '', $email = ''){
        User::create([
            'username' => $username,
            'email' => $email
        ]) ;
    }
}