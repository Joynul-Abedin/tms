<?php

$email = "";
$err_email = "";
$pass = "";
$err_pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if(isset($_POST["submit"])){
    if (empty($_POST["email"])) {
        $err_email = "Email Required";
    }elseif (strpos($_POST["email"], " ")) {
        $err_email = "Username should not contain white space";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["pass"])) {
        $err_pass = "Password Required";
    } else {
        $pass = $_POST["pass"];
    }
}

include_once "config.php";

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    echo mysqli_error( $connection );
    throw new Exception( "Database cannot Connect" );
}

$action = $_REQUEST['action'] ?? '';

if ( 'login' == $action ) {
    $email = $_REQUEST['email'] ?? '';
    $password = $_REQUEST['pass'] ?? '';
  
    if ( $email && $password ) {
        $query = "SELECT * FROM users WHERE email='{$email}'";
        $result = mysqli_query( $connection, $query );
        if ( $data = mysqli_fetch_assoc( $result ) ) {
            $hash_passsword = $data['password'] ?? '';
            
            $_email = $data['email'] ?? '';
            $_id = $data['id'] ?? '';
            $_role = $data['user_type'] ?? '';
            $_SESSION['userLogin'] = "Loggedin";

            if ( password_verify($password, $hash_passsword) ) {
                header( "location:dashboard.php" );
                die();
            }
        } else {
            header( "location:login.php?error" );
        }

    }
}
