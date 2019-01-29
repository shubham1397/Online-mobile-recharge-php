<?php session_start();
include_once("conne.php");



$id=$_GET["id"];	
$operator=$_GET["operator"];
$type=$_GET["type"];
$plan=$_GET["plan"];
$amount=$_GET["amount"];
$description=$_GET["description"];
$m_no=$_GET["m_no"];


 $query="insert into recharge (operator,type,amount,plan,description,m_no) values (:operator,:type,:amount,:plan,:description,:m_no)";

  $stmt=$con->prepare($query);
  $stmt->bindParam(":operator",$operator);
  $stmt->bindParam(":type",$type);
  $stmt->bindParam(":amount",$amount);
  $stmt->bindParam(":plan",$plan);
  $stmt->bindParam(":description",$description);
   $stmt->bindParam(":m_no",$m_no);
  
	
	
  if($stmt->execute())
  {
  $_SESSION["recharge"]="Recharge successfull";
   header("location: success.php");
  }
  else
  {
  $_SESSION["recharge"]="Recharge unsuccessfull , please try again later";
  header("Location: uhome.php");
  }
  ?>
