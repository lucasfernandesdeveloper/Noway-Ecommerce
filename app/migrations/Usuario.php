<?php
namespace App\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class Usuario
{
    public function up()
    {
        Capsule::schema()->create('usuarios', function($table){
            $table->increments("id");
            $table->string("nome");
            $table->string("email");
            $table->string("senha");
            $table->string("cpf");
            $table->enum("sexo", ["M", "F", "NB"])->nullable();
            $table->date("data_nascimento")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Capsule::schema()->drop('usuarios');
    }
}