<?php

include 'db.php';

$id_cargo = $_POST['id_cargo'];
$cargo = $_POST['cargo'];


$query = "UPDATE cargos SET cargo = '$cargo'WHERE id_cargo = $id_cargo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cargos');