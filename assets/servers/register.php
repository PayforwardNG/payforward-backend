<?php
session_start();
require_once("connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobileNumber = $_POST["mobile-number"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirm-password"];
$referral = $_POST["referral"];
$match_email = "/^([A-Za-z0-9_\.\-])+\@([A-Za-z\.])+\.([A-Za-z]{2,3})$/";
$match_number = "/^[0-9]+$/";
$_SESSION["firstname"] = $firstname;

if (empty($firstname) && empty($lastname) && empty($email) && empty($mobileNumber) && empty($password) && empty($referral)) {
    $_SESSION["genErr"] = "Kindly fill the form";
    header("location: ../../register.php");

}
else if (empty($firstname)) {
    $_SESSION["firstErr"] = "Please enter your Firstname";
    header("location: ../../register.php");
}

else if (empty($lastname)) {
    $_SESSION["lastErr"] = "Please enter your Lastname";
    header("location: ../../register.php");
}


else if (!(preg_match($match_email, $email))){
    $_SESSION['emailErr'] = 'Please enter a valid email';
    header("Location: ../../register.php");
    }

else if (!(preg_match($match_number, $mobileNumber)) || strlen($mobileNumber) != 11){
    $_SESSION['numErr'] = 'Please enter a valid number';
    header("Location: ../../register.php");
}

else if ($password != $confirmPassword) {
    $_SESSION["passErr"] = "The passwords do not match";
    header("location: ../../register.php");
}

else {

    $userID = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    $newRef = 'payforwardng.com/'.$firstname."_".$lastname;
    $dbTransfer = mysqli_query($connection, "INSERT into registered (UserID, Firstname, Lastname, Email, Mobile_Number, Password, Referrals) VALUES ('$userID', '$firstname', '$lastname', '$email', '$mobileNumber', '$password','$newRef')");
            
        if ($dbTransfer) {

            header("Location: ../../success.php");
        } 
        else {
            $_SESSION['regErr'] = "An error occured";
            header("Location: ../../register.php");
        }
}
?>