<a href="?pagina=inserir_aluno" class="btn btn-success">Inserir novo aluno</a>

<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome alunos</th>
			<th>Data Nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($linha = mysqli_fetch_array($consulta_alunos)) {
			echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
			echo '<td>' . $linha['data_nascimento'] . '</td>';
		?>
			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>" style="a:visited:none"><span class="material-symbols-outlined">edit</span></a></td>
			<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?> "><span class="material-symbols-outlined">delete</span></a></td>
			</tr>
		<?php
		}
		?>
	</tbody>
	
</table>