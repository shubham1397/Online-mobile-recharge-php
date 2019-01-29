<?php session_start();
include_once("conne.php");
 
 $operator=$_POST["operator"];
 $description=$_POST["description"];
 

  $query="insert into aoffers(operator,description) values (:operator,:description)";
  
    $stmt=$con->prepare($query);
  $stmt->bindParam(":operator",$operator);
  $stmt->bindParam(":description",$description);
  
	
	
    if($stmt->execute())
  {
  $_SESSION["addfli"]="Flight added successfully";
   header("location: offers.php");
  }
  else
  {
  $_SESSION["addfli"]="Unable To add flight , please try again later";
  header("Location: woffers.php");
  }
  ?>