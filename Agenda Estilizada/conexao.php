<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>