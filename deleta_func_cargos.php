<?php 
include 'db.php';

$id_func_cargos = $_GET ['id_func_cargos'];

$query = "DELETE FROM FUNC_CARGOS WHERE ID_FUNC_CARGOS = $id_func_cargos";
mysqli_query($conexao,$query);

header('location:index.php?pagina=func_cargos');
?>