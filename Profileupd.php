<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");


$a= $_POST["FName"];
$a2= $_POST["LName"];
$c= $_POST["Mob"];
$j= $_POST["About"];

$mess="";
$mess.=Fullnamevalid($a,"Enter First Name");
$mess.=Fullnamevalid($a2,"Enter Last Name");
$mess.=nullvalid($c,"Enter Contact No");
$mess.=nullvalid($j,"Enter About Us Information");;

	//++++++++Full Name Only+++++++++++++++
	function Fullnamevalid($names,$nametital)
	{
         if(!preg_match('/^[_a-z]+$/i',$names))
         {
         return $nametital.", ";
         }
	}

	//++++++++Email Valid+++++++++++++++
	function EmailValid($names,$nametital)
	{
		if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $names))
		{
			 return $nametital.", ";
		}
	}

		//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital.", ";
		}	
	}

	function OnlyNumbervalid($names,$nametital)
	{
		if($names!="")
		{
			if(!preg_match('/^[_0-9]+$/i',$names))
			{
				return $nametital;
			}
		}
	}
	

	
	function Passvalid($names,$nametital,$length)
	{
		$x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length), ";
		}
	}

//++++++++Equal Valid+++++++++++++++
	function EqualValid($names1,$names2,$nametital)
	{
		if($names1!=$names2 || $names1=="")
		{
			 return $nametital.", ";
		}
	}


if($mess=="")
{
	$pics="profileicon.png";
	$Resumefile="";
		
if(isset($_FILES['Profilefile']['name']))
	{
$pics=time()."_".$_FILES['Profilefile']['name'];
move_uploaded_file($_FILES['Profilefile']['tmp_name'],"upload/".$pics); 
$_SESSION['userpic']=$pics;
	}
	else{
		$pics="profileicon.png";
	}

	
	
mysql_query("update user set Name='$a',Lname='$a2',Mob='$c',About='$j',photo='$pics' where UID=".$_SESSION['userid']);

echo "<script> alert('Information Update Successfully .!');</script>";
}
else
{
echo "<script> alert('Resume Update Fail - ".$mess."');</script>";
}

?>
