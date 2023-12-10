<a href="?pagina=inserir_cargo" class="btn btn-success">Inserir novo cargo</a>

<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="funcionarios">
	<thead>
		<tr>
			<th>Cargos</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($linha = mysqli_fetch_array($consulta_cargos)) {
			echo '<tr><td>' . $linha['cargo'] . '</td>';
		?>
			<td><a href="?pagina=inserir_cargo&editar=<?php echo $linha['id_cargo']; ?>" style="a:visited:none"><span class="material-symbols-outlined">edit</span></a></td>
			<td><a href="deleta_cargo.php?id_cargo=<?php echo $linha['id_cargo']; ?> "><span class="material-symbols-outlined">delete</span></a></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>