<?php session_start();
include_once("conne.php");
  $op_name=$_POST["op_name"];
  $op_disc=$_POST["op_disc"];
  
 

  $query="insert into admin (operator,description) values (:op_name,:op_disc)";

  $stmt=$con->prepare($query);
  $stmt->bindParam(":op_name",$op_name);
  $stmt->bindParam(":op_disc",$op_disc);
 
  
	
	
  if($stmt->execute())
  {
  $_SESSION["addfli"]="Flight added successfully";
   header("location: home.php");
  }
  else
  {
  $_SESSION["addfli"]="Unable To add flight , please try again later";
  header("Location: whome.php");
  }
  ?>