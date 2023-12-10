<?php 
include 'db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);
echo $usuario . "<br>";
echo $senha . "<br>";

$query = "SELECT * FROM USUARIOS WHERE usuario = '$usuario' and senha = '$senha'";
$consulta_senha = mysqli_query($conexao,$query);

/* $rows = mysqli_num_rows($consulta_senha); */

if (mysqli_num_rows($consulta_senha) == 1) {
    echo "aceito";
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;

    $query = "SELECT admin FROM USUARIOS WHERE usuario = '$usuario' and senha = '$senha'";
    $consulta_admin = mysqli_query($conexao,$query);
    while($linha = mysqli_fetch_array($consulta_admin)){
        $admin = $linha['admin'];
    }

    $_SESSION['admin'] = ($admin == true);
    
    header('location:index.php');
}else{
   header('location:index.php?erro');
}
?>