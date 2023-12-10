<?php if (!isset($_GET['editar'])) {?>
    <h1>Inserir novo funcionário</h1>
    <form action="processa_funcionarios.php" method="post">
        <br>
        <label class="badge text-bg-secondary" for="id_funcionario">Nome do funcionario:</label>
        <input class="form-control" type="text" name="nome_funcionario" id="id_funcionario" placeholder="Insira o nome do funcionario">
        <br><br>
        <input type="submit" value="Inserir funcionários">
    </form>
    <?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_funcionarios)){ ?>
		<?php if($linha['id_funcionarios'] == $_GET['editar']){ ?>
			<h1>Editar aluno</h1>
				<form method="post" action="edita_funcionarios.php">
					<input type="hidden" name="id_funcionarios" value="<?php echo $linha['id_funcionarios']; ?>">
					<br>
					<label class="badge badge-secondary">Nome funcionário:</label><br>
					<input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionário" value="<?php echo $linha['nome_funcionario']; ?>">
					<br><br>
					<input class="btn btn-success" type="submit" value="Editar funcionarios">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>