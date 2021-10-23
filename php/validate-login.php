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
            $username = $_POST['username'];
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
                print "Connection error! " . $e->getMessage() . "<br/>";
                die();
            }


        //Querying the database, looking for the values ​​filled in by the user upon login
            $query = "SELECT COD_USER FROM SPORTYO_USERS WHERE USERNAME = '$username' AND PASSWORD = '$password'";
        //echo $query;
            $stmt = $conn->query($query);
            $count = $conn->query("SELECT COUNT(*) FROM SPORTYO_USERS WHERE USERNAME = '$username' AND PASSWORD = '$password'")->fetchColumn();
            $cod_user = $stmt->fetchAll(PDO::FETCH_OBJ);
        //var_dump($cod_user);
            print $count;
            if ($count == '1') {
                session_start();

                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['cod_user'] = $cod_user[0];
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
                echo "Usuario não localizado!";
                die();
                echo '<br><a href="./login.php"><b>Voltar</b></a>';
            }
    ?>
</body>

</html>