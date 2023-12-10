<a href="?pagina=inserir_func_cargos" class="btn btn-success">Inserir uma nova func_cargos</a>
<table style="border: 1px solid #ccc; width:100%" class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome funcionário</th>
            <th>Cargo</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_func_cargos)) {
            echo '<tr><td>' . $linha['nome_funcionario'] . '</td>';
            echo '<td>' . $linha['cargo'] . '</td>';
        ?>
        <td><a href="deleta_func_cargos.php?id_func_cargos=<?php echo $linha['id_func_cargos']; ?>  "><span class="material-symbols-outlined">delete</span></a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table>