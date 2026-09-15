<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "escola";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão!");
}
