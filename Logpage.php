<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

$d= $_POST["Email"];
$e= $_POST["Password"];

$result=mysql_query("select * From user where Email='$d' and Pass ='$e'");

while($row=mysql_fetch_array($result))
	{	
			$_SESSION['userid'] = $row['UID'];
			$_SESSION['username']= $row['Name']." " .$row['Lname'];
			$_SESSION['useremail']= $row['Email'];
			$_SESSION['userpic']= $row['photo'];
	}
		

if($_SESSION['userid']!="" and $_SESSION['username']!="")
	{
		echo "<script> location.href=\"Main.php\";</script>";
	}
	else
	{
	    echo "<font color='#990000' >Login Fail plz Check Email and Password.!</font>";
	}

?>
