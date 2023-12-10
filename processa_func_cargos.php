<?php 
include 'db.php';

$funcionario = $_POST['funcionario'];
$cargo = $_POST['cargo'];

$query = "INSERT INTO func_cargos (id_funcionarios, id_cargo) VALUES ($funcionario,$cargo)";
mysqli_query($conexao,$query);

header('location:index.php?pagina=func_cargos');
?>