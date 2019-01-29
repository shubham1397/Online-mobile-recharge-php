<?php session_start();
include_once("conne.php");
 
 $operator=$_POST["operator"];
 $type=$_POST["type"];
 $plan=$_POST["plan"];
 $amount=$_POST["amount"];
 $description=$_POST["description"];
 
 

 $query="insert into aplan (operator,type,amount,description,plan) values (:operator,:type,:amount,:description,:plan)";

  $stmt=$con->prepare($query);
  $stmt->bindParam(":operator",$operator);
  $stmt->bindParam(":type",$type);
  $stmt->bindParam(":amount",$amount);
  $stmt->bindParam(":description",$description);
  $stmt->bindParam(":plan",$plan);
  
	
	
  if($stmt->execute())
  {
  $_SESSION["addfli"]="plan added successfully";
   header("location: plans.php");
  }
  else
  {
  $_SESSION["addfli"]="Unable To add Plan , please try again later";
  header("Location: wplans.php");
  }
  ?>