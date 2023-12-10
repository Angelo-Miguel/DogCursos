<?php
include 'db.php';

$nome_funcionario = $_POST['nome_funcionario'];

$query = "INSERT INTO FUNCIONARIOS(nome_funcionario) values ('$nome_funcionario')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=funcionarios');
?>