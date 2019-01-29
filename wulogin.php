<?php session_start();
include_once("conne.php");

 
  
$name=$_POST["name"];
$address=$_POST["address"];
$mob_no=$_POST["mob_no"];

$email=$_POST["email"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$pass=$_POST["pass"];

  $query="insert into uldetails (name,address,mob_no,email,age,gender,pass) values (:name,:address,:mob_no,:email,:age,:gender,:pass)";

  $stmt=$con->prepare($query);
  
  
  $stmt->bindParam(":name",$name);
  $stmt->bindParam(":address",$address);
  $stmt->bindParam(":mob_no",$mob_no);
  
  $stmt->bindParam(":email",$email);
  $stmt->bindParam(":age",$age);
  $stmt->bindParam(":gender",$gender);
  $stmt->bindParam(":pass",$pass);
	
  if($stmt->execute())
  {
  $_SESSION["login"]="Log IN Now";
   header("location: login.php");
  }
  else
  {
  $_SESSION["login"]="Unable To Sign Up, please try again later";
  header("Location: login.php");
  }
  ?>