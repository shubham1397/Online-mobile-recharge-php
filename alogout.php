<?php session_start();
unset($_SESSION["usertype"]);
$_SESSION["logout"]="Logout successfull";
header("location:login.php");
?>