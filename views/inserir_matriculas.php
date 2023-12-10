<h1>Inserir nova matrículas</h1>
<form action="processa_matriculas.php" method="post">
    <br>
    <label for="id_aluno">Selecione o aluno:</label>
    <select name="aluno" id="id_aluno">
        <?php 
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value='.$linha['id_aluno'].'>'.$linha['nome_aluno'].'</option>';
            }    
        ?>
    </select>
    <br><br>
    <label for="id_curso">Selecione o curso:</label>
    <select name="curso" id="id_curso">
    <?php 
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<option value='.$linha['id_curso'].'>'.$linha['nome_curso'].'</option>';
         }    
    ?>
    </select>
    <br><br>
    <input type="submit" value="Inserir Matricula">
</form>