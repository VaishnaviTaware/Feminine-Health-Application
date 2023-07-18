<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");
?>

<script type="text/javascript" src="js/jquery.min.js"></script>


<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$(".name").click(function() {
var element = $(this);
var Que_id = element.attr("id");
var Ansdata=element.html();
var info = 'Qid=' + Que_id;

//document.getElementById("show").innerHTML="";
$(".Resultans_"+Que_id).html('<div class="messagesresult"><span class="">'+Ansdata+'</span><input type="hidden" class="Ansdata" value="'+Ansdata+'"><br></div>');
$(".Allans_"+Que_id).html("");

$.ajax({
type: "POST",
url: "Messagesall.php",
data: info,
cache: true,
success: function(html){
//$("#all_message").html(html);
$("#all_message").append(html);

}  
});

return false;
});
});
</script>

<?php

$sid= $_SESSION['userid'];
$Qid= $_POST["Qid"];

$result=mysql_query("select * From exam_que where Qid>$Qid Order by Qid limit 1");
$count = mysql_num_rows($result);
if($count>=1)
{
while($row=mysql_fetch_array($result))
{
?>

						<div class="alert alert-info clearfix">
 								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#"><?php echo $row['Question']; ?></a></span></li>
								</ul>
 						</div>

<div class="Allans_<?php echo $row['Qid']; ?>">
<?php
if($row['Ans1']!="")
{
?>
<div class="messages" ><span class="name" id="<?php echo $row['Qid']; ?>" ><?php echo $row['Ans1']; ?></span><br></div>
<?php
}
if($row['Ans2']!="")
{
?>
<div class="messages"><span class="name" id="<?php echo $row['Qid']; ?>"><?php echo $row['Ans2']; ?></span><br></div>
<?php
}
if($row['Ans3']!="")
{
?>
<div class="messages"><span class="name" id="<?php echo $row['Qid']; ?>"><?php echo $row['Ans3']; ?></span><br></div>
<?php
}
if($row['Ans4']!="")
{
?>
<div class="messages"><span class="name" id="<?php echo $row['Qid']; ?>"><?php echo $row['Ans4']; ?></span><br></div>
<?php
}
?>
</div>
					<br>

<div class="Resultans_<?php echo $row['Qid']; ?>">
</div>

<br><hr>

<?PHP
}
}
else{
	echo '<div class="messagesresult"><span class="">Now Get Result</span><br></div>';
?>
<form id="PCODresult"  >
<input type="hidden" class="setallans1" name="testresult">
</form>
<div id="preview"></div>
<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$(".messagesresult").click(function() {
$(".setallans1").val('');
var cusid_ele = document.getElementsByClassName('Ansdata');
for (var i = 0; i < cusid_ele.length; ++i) {
    var item = cusid_ele[i];  
    //alert(item.value);
	var res=item.value;
	if(item.value.includes("Yes"))
	{
		res="1";
	}
	else
	{
		res="0";
	}
	
	if(item.value.includes("15-24"))
	{
		res="20";
	}

	if(item.value.includes("24-31"))
	{
		res="28";
	}

	if(item.value.includes("than 31"))
	{
		res="32";
	}


	if(item.value.includes("18-25"))
	{
		res="21";
	}
	if(item.value.includes("26-30"))
	{
		res="28";
	}
	if(item.value.includes("31-40"))
	{
		res="35";
	}
	if(item.value.includes("41-50"))
	{
		res="45";
	}

	if(item.value.includes("PCOD / PCOS"))
	{
		res="0";
	}
		if(item.value.includes("Diabetes"))
	{
		res="1";
	}
		if(item.value.includes("Thyroid"))
	{
		res="2";
	}
		if(item.value.includes("None"))
	{
		res="3";
	}
	
	
	if(item.value.includes("for weight gain"))
	{
		res="0";
	}
	if(item.value.includes("for weight loss"))
	{
		res="1";
	}
	if(item.value.includes("No plans"))
	{
		res="2";
	}
	if(item.value.includes("Other"))
	{
		res="3";
	}
	
	$(".setallans1").val($(".setallans1").val()+res+"_");					
					
}

					var info=$('#PCODresult').serialize();
					$.ajax({
					type: "POST",
					url: "cgi/BCILR.py",
					data: info,
					cache: true,
					success: function(html){
						//alert(html);
					$("#preview").html(html);
					}  
					});
					
return false;
});
});
</script>
<?php	
	
}
?>
