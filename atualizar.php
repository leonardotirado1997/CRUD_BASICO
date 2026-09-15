<?php

include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sql = "UPDATE alunos SET nome='$nome', idade='$idade' WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar.php");
