    </div>
    <footer>
        <div class="container">
            ©2023 DogCursos - Todos os direitos reservados.
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready( function (){
        $('#cursos').DataTable();
        $('#alunos').DataTable();
        $('#matriculas').DataTable();
        $('#funcionarios').DataTable();
    } );
    </script>
</body>
</html>