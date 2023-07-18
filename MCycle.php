</br></br></br>

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">

<link rel="stylesheet" href="./humanity/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="./jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="js/jquery.form.js"></script>

<script type="text/javascript" src="./jquery.ui.core.min.js"></script>
<script type="text/javascript" src="./jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="./jquery.ui.datepicker.min.js"></script>
<style type="text/css">
.ui-datepicker
{
   font-family: Arial;
   font-size: 13px;
   z-index: 1003 !important;
   display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
   var jQueryDatePicker1Opts =
   {
      dateFormat: 'yy-mm-dd',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   };
   $("#jQueryDatePicker1").datepicker(jQueryDatePicker1Opts);



});
</script>


<div class="col-lg-7" id="ChatList" style="border: 1px solid var(--light);">		
<div class="right">
<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$("#MCycle").click(function() {
	
	$("#previewreg").html('');
$("#previewreg").html('<img src="load.gif" alt="Uploading...."/>');

				$("#Regform").ajaxForm({
						target: '#previewreg'
					}).submit();


	return false;
});
});
</script>

<div class="right">
        <h1>Menstrual Cycle Tracker</h1>
		<br>
</div>

<form id="Regform" action="Cycleupd.php" method="post" enctype="multipart/form-data">
<p class="bold">Set Last Menstrual Cycle</p>
<input type="text" id="jQueryDatePicker1" class="form-control" Name="MCdate" placeholder="Select Date" value="<?php echo date('Y-m-d');?>" >
					<br>
<div id="previewreg"></div>
<input type="Button" id="MCycle" class="form-control"  value="Set">
<hr><br>
</form>

<?php


$result=mysql_query("select *,timestampdiff(DAY, MCycledate, NOW()) as daysdiff From user where UID=".$_SESSION['userid']);
while($row=mysql_fetch_array($result))
	{
?>

<div class="right" id="BMIRESULT">
        <B>Last Menstrual Cycle Days :<?php echo $row['daysdiff']; ?> Days</B>
</div>


<div class="right" id="BMINOTE">
        <B>Note -</B><br>
		<?php
		if($row['daysdiff']>28)
		{
			echo "Menstrual Cycle Days Expire". ($row['daysdiff']-28) ." Days";
		}
		if($row['daysdiff']<28)
		{
			echo "Menstrual Cycle Days Remaining ". (28-$row['daysdiff'])." Days";
		}
		if($row['daysdiff']==28)
		{
			echo "28 days Completed Today";
		}
		?>
</div>

<?php
	}
?>
        </div>
    </div>
</div>

</div>
