<!DOCTYPE html>
<head>
<title>BCI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 
 <style>
 /*--placeholder-color--*/
::-webkit-input-placeholder {
	color:#fff !important;
}
:-moz-placeholder { /* Firefox 18- */
	color:#fff !important; 
}
::-moz-placeholder {  /* Firefox 19+ */
	color:#fff !important;
}
:-ms-input-placeholder {  
	color:#fff !important;
}
/*--//placeholder-color--*/
</style>

</head>
<body id="bodymystyle1">
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.form.js"></script>

<script type="text/javascript">

$(function() {
$("#show-password").click(function() {
	 
	if ($("#show-password").attr("ref")=='show-password') {
 		$("#showpassword").attr("type", "text");
		$("#showpasswordeye").attr("class", "fa fa-eye-slash");
		$("#show-password").attr("ref", "hide-password");
    } else {
 	  	$("#showpassword").attr("type", "password");
		$("#showpasswordeye").attr("class", "fa fa-eye");
		$("#show-password").attr("ref", "show-password");
    }
return false;
});
});

$(function() {
$("#show-password1").click(function() {
	if ($("#show-password1").attr("ref")=='show-password1') {
		$("#showpassword1").attr("type", "text");
		$("#showpasswordeye1").attr("class", "fa fa-eye-slash");
		$("#show-password1").attr("ref", "hide-password1");
    } else {
	  	$("#showpassword1").attr("type", "password");
		$("#showpasswordeye1").attr("class", "fa fa-eye");
		$("#show-password1").attr("ref", "show-password1");
    }
return false;
});
});

$(function() {
$("#Reg_button").click(function() {

$("#previewreg").html('');
$("#previewreg").html('<img src="loader.gif" alt="Uploading...."/>');

				$("#Regform").ajaxForm({
						target: '#previewreg'
					}).submit();
					
return false;
});
});
	
	

</script>


<div class="reg-w3" ng-app="AngularApp" ng-controller="HelloController">
<div class="w3layouts-main">
<img src="logo.png" width="120px" class="center">
</br></br>
	<h2>Sign Up</h2>
		<form id="Regform" action="Regpage.php" method="post" class="wpcf7-form" novalidate="novalidate">


			<input type="Course" class="ggg" name="FName" placeholder="Enter First Name" required="">
			<input type="Course" class="ggg" name="LName" placeholder="Enter Last Name" required="">
			<input type="Course" class="ggg" name="Email" placeholder="Enter Email" required="">
			<input type="Course" class="ggg" name="Mobile" placeholder="Enter Mobile No" required="">
						
			<div class="col-md-10">
			<input type="password" id="showpassword" class="ggg" name="Password" placeholder="Enter Password" required="" style="margin: 15px 500px 0px 15px;">
			</div>
			<div class="icon-box col-md-1" id="show-password" ref="show-password" style="margin: 14px 0px;padding: 12px 12px 12px 12px;"><a class="agile-icon" ><i class="fa fa-eye" id="showpasswordeye"></i></a></div>
			
			<div class="col-md-10">
			<input type="password" id="showpassword1" class="ggg" name="RPassword" placeholder="Re-Enter Password" required="" style="margin: 15px 500px 0px 15px;">
			</div>
			<div class="icon-box col-md-1" id="show-password1" ref="show-password1" style="margin: 14px 0px;padding: 12px 12px 12px 12px;"><a class="agile-icon"  ><i class="fa fa-eye" id="showpasswordeye1" ></i></a></div>
			
			
			<div class="card-heading"><div></div></div>
				<div class="clearfix"></div>
				<input type="button" value="submit" name="register" id="Reg_button" data-ng-click="Reg_button($event)">

		<div id="previewreg"></div>
		
		</form>
		
		
		<p>Already Registered.<a href="index.php">Login</a></p>
</div>
</div>


<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
