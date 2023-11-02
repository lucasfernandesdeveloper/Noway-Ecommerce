<?php
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model as Model;


class Autenticar extends Controller{
    public function index()
    {
        $this->view('autenticar/login');
    }

    public function cadastro($request){
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = $_POST['senha'];
        $usuario->cpf = $_POST['cpf'];
        $usuario->data_nascimento = $_POST['data_nascimento'];
        $usuario->sexo = $_POST['sexo'];
        $usuario->save();

        if (isset($usuario)){
            $this->view('home/index');
        } else {
            $this->view('autenticar/cadastro');
        }
    }

    public function logar(){

    }
}

