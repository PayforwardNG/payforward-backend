<?php
session_start();
require_once("connect.php");

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email) || empty($password)) {
    $_SESSION["emptyErr"] = "Please complete all fields!";
    header("Location: ../../login.php");

}
else {
    $sign_check = mysqli_query($connection, "SELECT * FROM registered WHERE Email = '$email' ");
    $sign_check_array = mysqli_fetch_assoc($sign_check);
    if ($sign_check_array) {
        if ($sign_check_array['Password'] == $password) {
            // header("Location: ../../payforward_dashboard.php");
            header("Location: ../../payforward_dashboard.php");
            $_SESSION['userdetails'] = $sign_check_array;
        } else{
            $_SESSION["passErr"] = "Incorrect Password";
            header("Location: ../../login.php");
        }
    } 
    else {
    $_SESSION["emailErr"] = "Email does not exist";
    header("Location: ../../login.php");
    }
}
?>