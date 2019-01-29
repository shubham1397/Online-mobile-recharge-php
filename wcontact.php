<?php session_start();
include_once("conne.php");



	
$name=$_POST["name"];
$email=$_POST["email"];
$no=$_POST["no"];
$message=$_POST["message"];


$query="insert into feedback (name,email,no,message) values (:name,:email,:no,:message)";

  $stmt=$con->prepare($query);
  $stmt->bindParam(":name",$name);
  $stmt->bindParam(":email",$email);
  $stmt->bindParam(":no",$no);
  $stmt->bindParam(":message",$message);
 
	
	
  if($stmt->execute())
  {
  $_SESSION["recharge"]="Thank you for your feedback";
   header("location: contact.php");
  }
  else
  {
  $_SESSION["recharge"]="Something went wrong, please try again later";
  header("Location: recharge.php");
  }
  ?>
