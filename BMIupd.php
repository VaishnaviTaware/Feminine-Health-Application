<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

$a= round($_POST["BMI"]);
$a2= $_POST["BMIRES"];

mysql_query("update user set BMI='$a',BMIRES='$a2' where UID=".$_SESSION['userid']);

?>
