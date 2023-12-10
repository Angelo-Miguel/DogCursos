<?php
include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$nascimento = $_POST['nascimento'];

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) values ('$nome_aluno','$nascimento')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=alunos');
?>