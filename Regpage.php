<?php

include("db.php");


$a= $_POST["FName"];
$a1= $_POST["LName"];
$b= $_POST["Email"];
$c= $_POST["Mobile"];
$d= $_POST["Password"];
$e= $_POST["RPassword"];


$mess="";
$mess.=Fullnamevalid($a,"Enter Valid First Name");
$mess.=Fullnamevalid($a1,"Enter Valid Last Name");
$mess.=EmailValid($b,"Plz Enter Email");
$mess.=DatbaseValid($b,"Email All Ready Register");
$mess.=Passvalid($d,"Plz Enter Password",8);
$mess.=EqualValid($d,$e,"Password Conformation Fail");
$mess.=phonevalid($c,"Enter Valid Phone No.",10);


	//++++++++Full Name Only+++++++++++++++
	function Fullnamevalid($names,$nametital)
	{
         if(!preg_match('/^[_a-z]+$/i',$names))
         {
         return $nametital.",";
         }
	}

	//++++++++Email Valid+++++++++++++++
	function EmailValid($names,$nametital)
	{
		if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $names))
		{
			 return $nametital.",";
		}
	}

		//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital.",";
		}	
	}

//++++++++Data Base Valid+++++++++++++++
	function DatbaseValid($valuechk,$nametital)
	{
	$select_table = "select * from  user where Email='".$valuechk."'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
		 return $nametital.",";
		}
	}

	function Passvalid($names,$nametital,$length)
	{
		$x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length),";
		}
	}

//++++++++Equal Valid+++++++++++++++
	function EqualValid($names1,$names2,$nametital)
	{
		if($names1!=$names2 || $names1=="")
		{
			 return $nametital.",";
		}
	}


	function phonevalid($names,$nametital,$length)
	{
		 $x=strlen($names);
		 if($x!=$length)
		{
				return $nametital."(Min Length $length),";
		}
		else if(!preg_match('/[0-9 -()+]+$/', $names))
		{
				return $nametital;
		}
	}

if($mess=="")
{
mysql_query("INSERT INTO user(Name,Lname,Email,Mob,Pass) VALUES ('$a','$a1','$b','$c','$d')");

echo "<script> alert('Registration Successfully .!'); location.href=\"index.php\";</script>";
}
else
{
echo "<font color='#990000' >Registration Fail:".$mess."</font>";
}

?>
