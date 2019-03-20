<?php
    SESSION_START();
    require_once("conexao.php");

    $sql = "SELECT * FROM usuarios WHERE sts = 1"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //echo count($users);
    $_SESSION['Quantidade de mensagens'] = count($users);


?>