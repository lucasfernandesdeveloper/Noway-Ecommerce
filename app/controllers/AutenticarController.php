<?php
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model as Model;

class Autenticar extends Controller{
    public function index()
    {
        $this->view('autenticar/cadastro');
    }

    public function cadastro()
    {
        $this->view('autenticar/cadastro');
    }

    public function login()
    {
        $this->view('autenticar/login');
    }


    public function cadastrar($request){
        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
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
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = Usuario::where('email', $email)->where('senha', password_verify($senha, PASSWORD_DEFAULT))->get();
        if(!empty($data)){
            $this->view('home/index', ['usuario' => $data]);
        } else {
            $this->view('home/index', ['usuario' => $data]);
        }

    }
}

