<!-- TELA DE CADASTRO/CRIAR - (C DO CRUD QUE É O CREATE) -->
<?php

include("conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "INSERT INTO alunos(nome, idade) 
VALUES ('$nome', '$idade')";

mysqli_query($conexao, $sql);

echo "Aluno Cadastrado!";

echo "<br><br>";

echo "<a href='index.php'>Voltar</a>";
