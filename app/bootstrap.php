<?php
/* ---Este é o arquivo de configuração e conexão com o banco de dados--- */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => 'root',
    'database' => 'noway',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',

]);

$capsule->setAsGlobal();
$capsule->bootEloquent();