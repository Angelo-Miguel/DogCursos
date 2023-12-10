<?php 
    mysqli_report(MYSQLI_REPORT_OFF);
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "aula_php";

    $conexao = @mysqli_connect($servidor,$usuario,$senha,$database);

    $query = "SELECT * FROM cursos";
    $consulta_cursos = mysqli_query($conexao,$query);

    $query = "SELECT * FROM alunos";
    $consulta_alunos = mysqli_query($conexao,$query);

    $query = "SELECT * FROM alunos_curso inner join cursos on alunos_curso.id_curso=cursos.id_curso inner join alunos on alunos_curso.id_aluno=alunos.id_aluno";
    $consulta_alunos_curso = mysqli_query($conexao,$query);

    $query = "SELECT * FROM funcionarios";
    $consulta_funcionarios = mysqli_query($conexao,$query);

    $query = "SELECT * FROM cargos";
    $consulta_cargos = mysqli_query($conexao,$query);

    $query = "SELECT * FROM func_cargos inner join cargos on func_cargos.id_cargo=cargos.id_cargo inner join funcionarios on func_cargos.id_funcionarios=funcionarios.id_funcionarios;";
    $consulta_func_cargos = mysqli_query($conexao,$query);