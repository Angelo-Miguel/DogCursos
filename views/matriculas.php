<a href="?pagina=inserir_matriculas" class="btn btn-success">Inserir uma nova matrícula</a>
<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome alunos</th>
            <th>Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos_curso)) {
            echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
            echo '<td>' . $linha['nome_curso'] . '</td>';
        ?>
        <td><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_aluno_curso']; ?>  "><span class="material-symbols-outlined">delete</span></a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table>