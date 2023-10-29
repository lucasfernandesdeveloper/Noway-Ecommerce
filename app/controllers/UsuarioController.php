<?php

class Usuario extends Controller{
    public function criar(){
        $this->view('cadastro/cadastro');
        /*
        User::create([
            'username' => $username,
            'email' => $email
        ]) ;*/
    }
}


