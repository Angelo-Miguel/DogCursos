<?php 
include 'db.php';

$aluno = $_POST['aluno'];
$curso = $_POST['curso'];

$query = "INSERT INTO alunos_curso (id_aluno, id_curso) VALUES ($aluno,$curso)";
mysqli_query($conexao,$query);

header('location:index.php?pagina=matriculas');
?>