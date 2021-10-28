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

    //Taking the values ​​of the user trying to create account through the page create_account.php
    $first_name = mb_strtoupper($_POST['first-name']);
    $last_name = $_POST['last-name'];
    $cpf = preg_replace("/[^0-9]/", "", $_POST['cpf']);
    $birth_date = $_POST['birth-date'];
    $sex = $_POST['sex'];
    $cell_phone = $_POST['cell-phone'];
    $landline = $_POST['landline'];
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);
    $cep = $_POST['cep'];
    $address = $_POST['address'];
    $address_complement = $_POST['address-complement'];
    $address_number = $_POST['address-number'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $_POST['optin-newsletter'] = (isset($_POST['optin-newsletter'])) ? true : 0;
    $newsletter = strval($_POST['optin-newsletter']);

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

    //Querying the database, checking if the user in question already exists
    $query = "SELECT COUNT(*) FROM SPORTYO_USERS WHERE EMAIL = '$email'";
    $count = $conn->query($query)->fetchColumn();
    if ($count == '1') {
        //if it already exists, redirects to the page that informs it.
        header('location:./user_already_exists.php');
        die();
    } else {
        try {
            //if it does not exist, then perform the registration below
            $stmt = $conn->prepare("INSERT INTO SPORTYO_USERS (cod_user, username, password, email) VALUES (:cod_user, :username, :password, :email)");
            $stmt->bindParam(':cod_user', $cod_user);
            $stmt->bindParam(':username', $first_name);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);

            //Defines the only missing variable that is cod_user, with the max already existing in the table, plus one
            $query = "SELECT NVL(MAX(COD_USER),0)+1 FROM SPORTYO_USERS";
            $cod_user = $conn->query($query)->fetchColumn();
            //Insert into SPORTYO_USERS
            $stmt->execute();

            //Insert into sportyo_address
            $stmt = $conn->prepare("INSERT INTO SPORTYO_ADDRESS (cod_user, cod_address, cep, address, complement, address_number, district, city, state) VALUES (:cod_user, :cod_address, :cep, :address, :complement, :address_number, :district, :city, :state)");
            $stmt->bindParam(':cod_user', $cod_user);
            $stmt->bindParam(':cod_address', $cod_address);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':complement', $address_complement);
            $stmt->bindParam(':address_number', $address_number);
            $stmt->bindParam(':district', $district);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':state', $state);

            //Defines missing variables that is cod_user and cod_address
            $query = "SELECT COD_USER FROM SPORTYO_USERS WHERE EMAIL = '$email'";
            $cod_user = $conn->query($query)->fetchColumn();
            $query = "SELECT NVL(MAX(COD_ADDRESS),0)+1 FROM SPORTYO_ADDRESS";
            $cod_address = $conn->query($query)->fetchColumn();

            $stmt->execute();

            //Insert into sportyo_people
            $stmt = $conn->prepare("INSERT INTO SPORTYO_PEOPLE (cod_user, cod_people, cod_address, first_name, last_name, cpf, birth_date, sex, cell_phone, landline, email, optin_newsletter, fg_licence_acepted) VALUES (:cod_user, :cod_people, :cod_address, :first_name, :last_name, :cpf, :birth_date, :sex, :cell_phone, :landline, :email, :optin_newsletter, :fg_licence_acepted)");
            $stmt->bindParam(':cod_user', $cod_user);
            $stmt->bindParam(':cod_people', $cod_people);
            $stmt->bindParam(':cod_address', $cod_address);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':birth_date', $birth_date);
            $stmt->bindParam(':sex', $sex);
            $stmt->bindParam(':cell_phone', $cell_phone);
            $stmt->bindParam(':landline', $landline);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':optin_newsletter', $newsletter);
            $stmt->bindParam(':fg_licence_acepted', $fg_licence_acepted);

            //Defines missing variables that is cod_user,cod_people, cod_address and fg_licence_acepted
            $query = "SELECT COD_USER FROM SPORTYO_USERS WHERE EMAIL = '$email'";
            $cod_user = $conn->query($query)->fetchColumn();
            $query = "SELECT COD_ADDRESS FROM SPORTYO_ADDRESS WHERE COD_USER = '$cod_user'";
            $cod_address = $conn->query($query)->fetchColumn();
            $query = "SELECT NVL(MAX(COD_PEOPLE),0)+1 FROM SPORTYO_PEOPLE";
            $cod_people = $conn->query($query)->fetchColumn();
            $fg_licence_acepted = 1;


            $stmt->execute();
            header('location:./create_account_sucefull.php');
            die();
        } catch (PDOException $e) {
            //In case of an error when inserting the data, we delete the data from the tables, so that any value that has been recorded is deleted.
            $query = "SELECT COD_USER FROM SPORTYO_USERS WHERE EMAIL = '$email'";
            $cod_user = $conn->query($query)->fetchColumn();

            $sql = "DELETE SPORTYO_PEOPLE WHERE COD_USER = '$cod_user'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $sql = "DELETE SPORTYO_ADDRESS WHERE COD_USER = '$cod_user'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $sql = "DELETE SPORTYO_USERS WHERE COD_USER = '$cod_user'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            header('location:./connection-error-page.php');
            die();
        }
    }
    ?>
</body>

</html>