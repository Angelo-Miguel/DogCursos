<?php 

include './db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$query = "INSERT INTO USUARIOS VALUES (default,'false','$usuario','$senha')";
mysqli_query($conexao,$query);

header("location:index.php");

?>