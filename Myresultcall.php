<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('db.php');

$result=mysql_query("select * From user where UID=".$_SESSION['userid']);
while($row=mysql_fetch_array($result))
{
 echo "<b>".$row['Detectv']."</b>";
}
?>