<h1>Inserir nova matrículas</h1>
<form action="processa_func_cargos.php" method="post">
    <br>
    <label for="id_funcionario">Selecione o funcionario:</label>
    <select name="funcionario" id="id_funcionario">
        <?php 
            while($linha = mysqli_fetch_array($consulta_funcionarios)){
                echo '<option value='.$linha['id_funcionarios'].'>'.$linha['nome_funcionario'].'</option>';
            }    
        ?>
    </select>
    <br><br>
    <label for="id_cargo">Selecione o cargo:</label>
    <select name="cargo" id="id_cargo">
    <?php 
        while($linha = mysqli_fetch_array($consulta_cargos)){
            echo '<option value='.$linha['id_cargo'].'>'.$linha['cargo'].'</option>';
         }    
    ?>
    </select>
    <br><br>
    <input type="submit" value="Inserir func_cargos">
</form>