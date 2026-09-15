<?php

include("conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM alunos WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
$aluno = mysqli_fetch_assoc($resultado);

?>

<h1>Editar</h1>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
    Nome
    <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>">
    <br><br>
    Idade
    <input type="number" name="idade" value="<?php echo $aluno['idade']; ?>">
    <br><br>
    <button>Salvar</button>
</form>