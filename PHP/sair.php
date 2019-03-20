<?php
    SESSION_START();
    $_SESSION['logged_in'] = false;
    session_destroy();
    header('Location: ../View/login.php');
?>