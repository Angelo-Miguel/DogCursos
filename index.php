<?php

session_start();

#base de dados
include 'db.php';

#cabeçario
include 'header.php';

#conteudo da pagina
if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 'cursos';
    }
}
else{
    $pagina = 'home';
}


switch ($pagina) {
    case 'cursos': include 'views/cursos.php'; break;
    case 'alunos': include 'views/alunos.php'; break;
    case 'funcionarios': include 'views/funcionarios.php'; break;
    case 'cargos': include 'views/cargos.php'; break;
    case 'matriculas': include 'views/matriculas.php'; break;
    case 'func_cargos': include 'views/func_cargos.php'; break;
    case 'inserir_curso': include 'views/inserir_curso.php'; break;
    case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
    case 'inserir_funcionarios': include 'views/inserir_funcionarios.php'; break;
    case 'inserir_cargo': include 'views/inserir_cargo.php'; break;
    case 'inserir_func_cargos': include 'views/inserir_func_cargos.php'; break;
    case 'logout': include 'logout.php'; break;

    default: include 'views/home.php'; break;
}


#rodapé
include 'footer.php';
