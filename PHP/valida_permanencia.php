<?php
 
    session_start();
    require_once('conexao.php');
    if (!isLoggedIn())
    {
        header('location:../View/login.php');
    }
    
?>