<?php
    session_start();

    session_destroy();

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['cod_user']);
    unset($_SESSION['time']);

    header('location: ./login.php');

?>