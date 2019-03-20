<?php
    SESSION_START();
    include_once("conexao.php");
    
    $email = $_POST['email']; 
    $senha = $_POST['senha'];

    if(empty($email) || empty($senha)){
        header('location:../View/login.php');
        $_SESSION['CamposEmBranco'] = "erro";

    }else{
        $sql = "SELECT * FROM administrador WHERE email = :email AND senha = :senha AND sts = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':senha',$senha);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($users) <= 0)
        {
            header('location:../View/login.php');
            $_SESSION['erroLogin'] = "erro";
        }else{
            $_SESSION['logged_in'] = true;
            //var_dump($users);
            $_SESSION['user_id'] = $users[0]['id'];
            $_SESSION['user_email'] = $users[0]['email'];
            header('location:../View/areaADM.php');
        }
    }




?>