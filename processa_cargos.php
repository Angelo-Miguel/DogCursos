<?php
include 'db.php';

$cargos = $_POST['cargo'];

$query = "INSERT INTO CARGOS(cargo) values ('$cargos')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=cargos');
?>