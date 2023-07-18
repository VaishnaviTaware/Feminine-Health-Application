<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");


$a= $_POST["MCdate"];

$mess.=nullvalid($a,"Select Date");;


		//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital.", ";
		}	
	}


if($mess=="")
{
	
	
mysql_query("update user set MCycledate='$a' where UID=".$_SESSION['userid']);

echo "<script> alert('Date Update Successfully .!');</script>";
}
else
{
echo "<script> alert('Date Update Fail - ".$mess."');</script>";
}

?>
