<?php
//importar a calsse
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if ($sucesso) {
    echo( "Conectado ao banco");
}else{
    echo("Erro ao conectar ao banco");
}

$usuario->cadastrar("Maria","mariajardim@gamil.com","12345");
