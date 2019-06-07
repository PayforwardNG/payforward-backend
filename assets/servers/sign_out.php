<?php
session_start();

unset($_SESSION['userdetails']);

session_destroy();
header("location: ../../login.php");
?>