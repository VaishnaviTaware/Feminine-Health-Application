</br></br></br>

<input type="hidden" class="callme">
<input type="hidden" class="setallans">
<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$(".callme").click(function() {

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
	
	$(".setallans").val($(".setallans").val()+res+"_");
}

return false;
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){

var info = 'Qid=0';

if(info=='')
{
alert("Select For Answer..");
}
else
{
$(".Resultans_"+Que_id).html('<div style="background: rgba(150, 00, 22, 0.28);border: 1px solid var(--light);float:right;padding: 5px 10px;margin: 5px 10px;border-radius: 20px;"><span class="">'+Ansdata+'</span><br></div>');
$(".Allans_"+Que_id).html("");

$.ajax({
type: "POST",
url: "Messagesall.php",
data: info,
cache: true,
success: function(html){
$("#all_message").html(html);
}  
});

}


return false;

});

</script>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$(".name").click(function() {
var element = $(this);
var Que_id = element.attr("id");
var Ansdata=element.html();
var info = 'Qid=' + Que_id;
//alert(Ansdata);

//document.getElementById("show").innerHTML="";
$(".Resultans_"+Que_id).html('<div class="messagesresult"><span class="">'+Ansdata+'</span> <input type="hidden" class="Ansdata" value="'+Ansdata+'"><br></div>');
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

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">
        
<div class="col-lg-12" id="ChatList" style="border: 1px solid var(--light);">		
<div class="right">
<div class="chat" id="all_message" data-chat="person1" style="height:500px;overflow-y: scroll;">

<?PHP
$result=mysql_query("select * From exam_que Order by Qid limit 1");
while($row=mysql_fetch_array($result))
{
?>

						<div class="alert alert-info clearfix">
 								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#"><?php echo $row['Question']; ?></a></span></li>
								</ul>
 						</div>

<?php
/*
<div style="background: rgba(150, 00, 22, 0.28);border: 1px solid var(--light);width:400px;float:right;padding: 5px 10px;margin: 5px 10px;border-radius: 20px;">
                    <span class="name"><?php echo $row['Mess']; ?></span> <br>
                    <span class="preview" style="font-size:13px"><?php echo $row['Messdate']; ?></span>
					</div>
					<br>
*/
?>

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
?>
<style>
.messages{
background: rgba(255, 255, 255, 0.28);
border: 1px solid #8b5c7e;
float:left;
padding: 5px 10px;
margin: 5px 10px;
border-radius: 20px;
}

.messages:hover {
background: rgba(180, 180, 180, 0.28);
border: 1px solid #8b5c7e;
}

.messagesresult{
background: rgba(255, 255, 255, 0.28);
border: 1px solid #8b5c7e;
float:right;
padding: 5px 10px;
margin: 5px 10px;
border-radius: 20px;
}

.messagesresult:hover {
background: rgba(180, 180, 180, 0.28);
border: 1px solid #8b5c7e;
}
</style>
            </div>
            
           
            
            
            <div class="write">

            </div>



        </div>
    </div>
</div>

</div>
