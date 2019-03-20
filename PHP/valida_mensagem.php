<?php
   	SESSION_START();
    include_once("conexao.php");

    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto  = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $sts = 1;

    //echo $nome,$email,$telefone,$assunto,$mensagem;
    if(!(empty($nome) && empty($email) && empty($telefone) && empty($assunto) && empty($mensagem))){
       
        $query = "INSERT INTO usuarios (nome,email,telefone,assunto,mensagem,sts) VALUES (:nome,:email,:telefone,:assunto,:mensagem,:sts)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome",$nome,PDO::PARAM_STR);
        $stmt->bindParam(":email",$email,PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $telefone,PDO::PARAM_STR );
        $stmt->bindParam(":assunto", $assunto,PDO::PARAM_STR);
        $stmt->bindParam(":mensagem",$mensagem,PDO::PARAM_STR);
        $stmt->bindParam(":sts",$sts,PDO::PARAM_INT);
        if($stmt->execute()){
            header('location:../View/index.php#home');
            $_SESSION['sucesso'] = "true";
        }



    }else{
        $_SESSION['CamposVazios'] = "true";
        header('location:../View/index.php#contato');
    }


?>