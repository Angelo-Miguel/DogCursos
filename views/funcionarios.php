<a href="?pagina=inserir_funcionarios" class="btn btn-success">Inserir novo funcionário</a>

<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="funcionarios">
	<thead>
		<tr>
			<th>Nome Funcionários</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($linha = mysqli_fetch_array($consulta_funcionarios)) {
			echo '<tr><td>' . $linha['nome_funcionario'] . '</td>';
		?>
			<td><a href="?pagina=inserir_funcionarios&editar=<?php echo $linha['id_funcionarios']; ?>" style="a:visited:none"><span class="material-symbols-outlined">edit</span></a></td>
			<td><a href="deleta_funcionarios.php?id_funcionarios=<?php echo $linha['id_funcionarios']; ?> "><span class="material-symbols-outlined">delete</span></a></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>