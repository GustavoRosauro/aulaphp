<?php
   require_once('connection.php');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('delete from pessoa where id=:id');
    $stmt->execute(array(
        ':id'=>$_GET['id']
    ));
    header('Location: search.php');
?>