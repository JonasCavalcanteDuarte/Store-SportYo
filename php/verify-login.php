<?php
session_start();
if(!$_SESSION['username']){
    header('Location: ./php/login.php');
    exit();
}
?>