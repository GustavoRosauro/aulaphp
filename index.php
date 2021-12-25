<?php
    require_once('connection.php');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $pdo->prepare('INSERT INTO pessoa (nome,idade) VALUES(:nome,:idade)');
    $stmt->execute(array(
      ':nome' => $_POST["nome"],
      ':idade'=> $_POST["idade"]
    ));
  
    header("Location: search.php");
?>