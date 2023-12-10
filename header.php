<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogCursos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo DogCursos" alt="Logo DogCursos"></a>
            <div id="menu">
                <?php if (empty($_SESSION['login'])) { ?>
                    <div class="dropdown show"">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 20px 15px !important">Cadastro</a>

                        <div class="cadastro dropdown-menu">
                            <h1 style="text-align:center">Cadastro</h1>
                            <form method="post" action="cadastro.php">
                                <label class="badge badge-secondary">Usuário</label>
                                <input class="form-control" type="text" name="usuario" placeholder="Nome do usuário">
                                <br>
                                <label class="badge badge-secondary">Senha</label>
                                <input class="form-control" type="password" name="senha" placeholder="Senha">
                                <br>
                                <input class="btn btn-success" type="submit" value="Entrar">
                            </form>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($_SESSION['login'])) { ?>
                    <a href="?pagina=cursos">Cursos</a>
                    <a href="?pagina=alunos">Alunos</a>
                    <a href="?pagina=matriculas">Matrículas</a>
                    <?php if (!empty($_SESSION['admin'])) { ?>
                        <a href="?pagina=funcionarios">Funcionários</a>
                        <a href="?pagina=cargos">Cargos</a>
                        <a href="?pagina=func_cargos">Func_cargos</a>
                    <?php } ?>
                    <a href="logout.php"> <?php echo $_SESSION['usuario']; ?> SAIR</a>
                <?php } ?>

            </div>
        </div>
    </header>
    <div id="conteudo" class="container">