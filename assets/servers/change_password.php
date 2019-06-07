<?php
session_start();
require_once("connect.php");

$userdetails = $_SESSION['userdetails'];
$email = $userdetails['Email'];
$current_password = $_POST['current-password'];
$new_password = $_POST['new-password'];
$confirm_password = $_POST['confirm-password'];

if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
    $_SESSION["emptyPass"] = "All the fields are required to change your password";
    header("location: ../../profile.php");

}
else if ($new_password == $userdetails['Password']) {
    $_SESSION["samePass"] = "Your old password cannot be used";
    header("location: ../../profile.php");
}
else if ($current_password == $userdetails['Password'] && $new_password == $confirm_password) {
    $change_password = "UPDATE registered SET Password = '$new_password' where Email = '$email'  ";

    if (mysqli_query($connection, $change_password)) {
        $_SESSION['passwordUpdate'] = "You have succcessfully changed your password";
        header('location: ../../profile.php');
    }
    else {
        $_SESSION['dbPasswordUpdateErr'] = "An error occurred connecting with the database";
        header('location: ../../profile.php');
    }
} 
else {
    $_SESSION['passwordUpdateErr'] = "There was an error updating your password";
    header('location: ../../profile.php');
}
?>