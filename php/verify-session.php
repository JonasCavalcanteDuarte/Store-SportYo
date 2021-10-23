<?php

session_start();

if ( !isset($_SESSION['username']) or !isset($_SESSION['password']) or !isset($_SESSION['time']) ) {

    session_destroy();

    unset ($_SESSION['username']);
    unset ($_SESSION['password']);
    unset ($_SESSION['time']);
    $_SESSION=array();
}


?>