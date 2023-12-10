<?php 
include 'db.php';

$id_funcionario = $_GET ['id_funcionarios'];

$query = "DELETE FROM FUNCIONARIOS WHERE ID_FUNCIONARIOS = $id_funcionario";
mysqli_query($conexao,$query);

header('location:index.php?pagina=funcionarios');
?>