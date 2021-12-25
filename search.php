<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<h1>Consulta pessoas</h1>
<div class="col-md-6">
<table class="table table-striped">
    <!-- comentário para alterar página -->
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
    </thead>
    <tbody>
        <?php        
        require_once('connection.php');
        $consulta = $pdo->query("SELECT id,nome, idade FROM pessoa");

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$linha['nome']}</td> 
                    <td>{$linha['idade']}</td>
                    <td><a href='delete.php?id={$linha['id']}'>deletar</a></td>
                </tr>";
        }
        ?>
    </tbody>
</table>
</div>