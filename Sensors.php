<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

if(isset($_GET["A"]) and isset($_GET["B"]) )
{
$a= $_GET["A"];
$b= $_GET["B"];
$result=mysql_query("Update user set Detectv='$b' where UID='$a'");
echo "Record Saved Successful";
}
else{
echo "Fail..";
}
//http://localhost/BCI/Sensors.php?A=10&B=D10
?>