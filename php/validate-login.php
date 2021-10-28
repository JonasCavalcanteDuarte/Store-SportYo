<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php

        //Taking the username and password values ​​of the user trying to login through the page login.php
            $email = $_POST['email'];
            $password = md5($_POST['password']);


        //Connection Settings
            $db_username = "SPORTYO";
            $db_password = "123";
            $server         = "192.168.0.7";
            $service_name   = "XEPDB1";
            $sid            = "XE";
            $port           = 1521;
            $dbtns          = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVICE_NAME = $service_name) (SID = $sid)))";

        //Creating the object of conection

            try {
                $conn = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password);
                $test_connection = $conn->query('SELECT SYSDATE FROM DUAL');
            } catch (PDOException $e) {
                header('location:./connection-error-page.php');
                die();
            }


        //Querying the database, looking for the values ​​filled in by the user upon login
            $query = "SELECT USERNAME FROM SPORTYO_USERS WHERE EMAIL = '$email' AND PASSWORD = '$password'";
            $count = $conn->query("SELECT COUNT(*) FROM SPORTYO_USERS WHERE EMAIL = '$email' AND PASSWORD = '$password'")->fetchColumn();
            $username = $conn->query($query)->fetchColumn();
        //var_dump($username);
        //echo $username;
            
            if ($count == '1') {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['time'] = time();
                header('location:../index.php');
                die();
            } else {
                session_start();

                session_destroy();

                unset($_SESSION['username']);
                unset($_SESSION['password']);
                unset($_SESSION['time']);
                $_SESSION = array();
                header('location:./user-not-found.php');
                die();
            }
    ?>
</body>

</html>