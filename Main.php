<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('db.php');


if(!isset($_SESSION['userid']) and !isset($_SESSION['username']))
{
		header("Location:index.php");
}
?>


<!DOCTYPE html>
<head>
<title>ChatBot</title>
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

</head>
<body id="bodymystyle">
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

<?php
$result=mysql_query("select * From user where UID=".$_SESSION['userid']);
while($row=mysql_fetch_array($result))
	{
?>
    <a href="Main.php" class="logo">
	                <img alt="" src="upload/<?php if($row['photo']==""){ echo "profileicon.png"; }else{ echo $row['photo']; }?>" style="border-radius: 50px;width:100px;height:100px;"><br>
<?php
	}
?>

<?php echo $_SESSION['username']; ?>                    
                    
                </li>
                
	
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->

        <!-- settings end -->
        <!-- inbox dropdown start-->
	</ul>

</div>

</header>
<!--header end-->
<!--sidebar start-->
<aside>
<?php
include("menubar.php");
?> 
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<?php
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


if(!isset($_GET['page']))
{
include("message.php");
}
if($_GET['page']=='1' or $_GET['page']=='0')
{
include("message.php");
}
elseif($_GET['page']=='2')
{
include("usersresume.php");
}
elseif($_GET['page']=='3')
{
include("ueditresume.php");
}
elseif($_GET['page']=='4')
{
include("DietVeg.php");
}
elseif($_GET['page']=='5')
{
include("DietNonVeg.php");
}
elseif($_GET['page']=='6')
{
include("BMI.php");
}
elseif($_GET['page']=='7')
{
include("Yoga.php");
}
elseif($_GET['page']=='8')
{
include("HomeRemedies.php");
}
elseif($_GET['page']=='9')
{
include("MCycle.php");
}
elseif($_GET['page']=='10')
{
include("Video.php");
}
elseif($_GET['page']=='11')
{
include("Report.php");
}
elseif($_GET['page']=='12')
{
include("HWdata.php");
}
elseif($_GET['page']=='13')
{
include("DoctorConsultation.php");
}
elseif($_GET['page']=='14')
{
}
else
{
//include("home.php");
}
?>

</br>
 <!-- footer -->
		  
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>



<style>
.btn btn-default
{
	width:50px;
	
}
#mydiv
{
padding-left: 6px;
padding-right: 10px;
padding-top:0px;
padding-bottom: 30px;
box-shadow: 0 0.1875rem 1.25rem rgba(0, 0, 0, 0.16);
margin-bottom: 0.625rem;
border-radius: 20px;
font-size:90%;
}

#mydivnotification
{
padding-left: 6px;
padding-right: 10px;
padding-top:0px;
padding-bottom: 30px;
box-shadow: 0 0.1875rem 1.25rem rgba(0, 0, 0, 0.16);
margin-bottom: 0.625rem;
border-radius: 20px;
font-size:90%;
background: #66ccff;
}

#myresume
{
padding-left: 6px;
padding-right: 10px;
padding-top:10px;
padding-bottom:10px;
box-shadow: 0 0.1875rem 1.25rem rgba(0, 0, 255, 0.5);
margin-bottom: 0.625rem;
border-radius: 20px;
font-size:90%;
color:black;
}


#mybutton
{
color: rgba(0, 0, 0, 0.87);
    border: none;
    cursor: default;
    height: 32px;
    display: inline-flex;
    outline: none;
    padding: 10px;
	margin-right: 10px;
    font-size: 0.8125rem;
    box-sizing: border-box;
    transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    align-items: center;
    font-family: SF Pro Display,"Helvetica Neue",Arial,sans-serif;
    white-space: nowrap;
    border-radius: 16px;
    vertical-align: middle;
    justify-content: center;
    text-decoration: none;
    background-color: #e0e0e0;
	font-size:70%;
}
#myimg
{
	width:30px;
	height:30px;
	background: #0000ff;
	border-radius: 80%;
	float:left;
	margin-right: 0.625rem;
}

.myimg1
{
	width:27px;
	height:27px;
	background: #0000ff;
	border-radius: 80%;
	float:right;
	margin: 5px;
	padding: 0px 0px 5px 5px;

}

#mydelete
{
	width:15px;
	height:15px;
	border-radius: 80%;
	float:right;
	color:black;

}


</style>

<style>
ul.sidebar-menu {
    padding-top: 150px;
}

.brand {
    background: #8b5c7e;
    float: left;
    width: 240px;
    height: 90px;
    position: relative;
}
a.logo {
    font-size: 20px;
    color: #fff;
    float: left;
    margin: 30px 0 0 25px;
    
}
.market-update-block h4 {
    font-size: 17px;
    color: black;
    margin: 0.3em 0em;
}
.market-update-block.clr-block-4 {
    background: pink;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}

 
</style>
