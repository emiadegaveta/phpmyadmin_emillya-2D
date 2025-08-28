<?php

$host="localhost";
$usuario="root";
$email="";
$banco="mural_de_produtos";

$conexao= mysqli_connect($host, $usuario, $email, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>
 
