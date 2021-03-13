<?php

$name = "";
$err_name = "";
$email = "";
$err_email = "";
$dob = "";
$err_dob = "";
$address = "";
$err_address = "";
$gender = "";
$err_gender = "";
$phone_no = "";
$err_phone_no = "";
$pass = "";
$err_pass = "";
$confirm_pass = "";
$err_confirm_pass = "";
$user_type = "";
$err_user_type = "";
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err_name = "Name Required";
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["address"])) {
        $err_address = "Addres Required";
    } else {
        $address = $_POST["address"];
    }
    if (empty($_POST["phone_no"])) {
        $err_phone_no = "Phone Number Required";
    } else {
        $phone_no = $_POST["phone_no"];
    }
    if (empty($_POST["dob"])) {
        $err_dob = "Date of Birth Required";
    } else {
        $dob = $_POST["dob"];
    }
    if (empty($_POST["email"])) {
        $err_email = "Email Required";
    } elseif (strpos($_POST["email"], " ")) {
        $err_email = "Username should not contain white space";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["password"])) {
        $err_pass = "Password Required";
    } else {
        $pass = $_POST["password"];
    }
    if (empty($_POST["user_type"])) {
        $err_user_type = "User Type Required";
    } else {
        $user_type = $_POST["user_type"];
    }
}


include_once "config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo mysqli_error($connection);
    throw new Exception("Database cannot Connect");
}

$action = $_REQUEST['action'] ?? '';

if ('registration' == $action) {

    $name = $_REQUEST['name'] ?? '';
    $dob = $_REQUEST['dob'] ?? '';
    $address = $_REQUEST['address'] ?? '';
    $phone_no = $_REQUEST['phone_no'] ?? '';
    $email = $_REQUEST['email'] ?? '';
    $user_type = $_REQUEST['user_type'] ?? '';
    $password = $_REQUEST['password'] ?? '';
    $con_password = $_REQUEST['confrim_password'] ?? '';

    if ($password == $con_password) {

        if ($name && $dob && $address && $phone_no && $email && $password && $user_type) {
            echo 'jkcdjkvc';
            $has_password = md5($password);
            $query = "INSERT INTO users (name, dob, gender, address, email, phone_no, password, user_type) VALUES ('$name', '$dob', '$gender', '$address', '$email', '$phone_no', '$has_password', '$user_type')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                $success = "You have successfully registered. Now you can login !!!...";
                header("location:login.php");
                die();
            } else {
                header("location:registration.php?error");
            }
        }
    }
}
