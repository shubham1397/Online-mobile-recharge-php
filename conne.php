<?php
$dbhost="localhost";
$dbname="mobile";
$dbuser="root";
$dbpass="";

try
{
$con = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass,NULL);
}
catch(PDOException $e)
{
echo "exception".$e->getMessage();
exit();
}
?>