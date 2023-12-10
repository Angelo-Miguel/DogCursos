<a href="?pagina=inserir_curso" class="btn btn-success">Inserir novo curso</a>

<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<tr><td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td>';
        ?>
        <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>"><span class="material-symbols-outlined">edit</span></a></td>
        <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?> "><span class="material-symbols-outlined">delete</span></a></td></tr>
        <?php 
            }
        ?>
    </tbody>
</table>