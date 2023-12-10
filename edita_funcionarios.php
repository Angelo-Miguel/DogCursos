<?php

include 'db.php';

$id_funcionarios = $_POST['id_funcionarios'];
$nome_funcionario= $_POST['nome_funcionario'];

$query = "UPDATE funcionarios SET nome_funcionario = '$nome_funcionario' WHERE id_funcionarios = $id_funcionarios";

mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionarios');