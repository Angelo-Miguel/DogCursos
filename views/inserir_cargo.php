<?php if (!isset($_GET['editar'])) {?>
    <h1>Inserir novo cargo</h1>
    <form action="processa_cargos.php" method="post">
        <br>
        <label class="badge text-bg-secondary" for="id_cargo">Cargo:</label>
        <input class="form-control" type="text" name="cargo" id="id_cargo" placeholder="Insira o cargo">
        <br><br>
        <input type="submit" value="Inserir cargo">
    </form>
    <?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cargos)){ ?>
		<?php if($linha['id_cargo'] == $_GET['editar']){ ?>
			<h1>Editar cargo</h1>
				<form method="post" action="edita_cargo.php">
					<input type="hidden" name="id_cargo" value="<?php echo $linha['id_cargo']; ?>">
					<br>
					<label class="badge badge-secondary">Cargo:</label><br>
					<input class="form-control" type="text" name="cargo" placeholder="Insira o cargo" value="<?php echo $linha['cargo']; ?>">
					<br><br>
					<input class="btn btn-success" type="submit" value="Editar cargo">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>