</br></br></br>

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">
        
<div class="col-lg-12" id="ChatList" style="border: 1px solid var(--light);">		

<div class="right">
        <h1>Doctor Consultation</h1>
		<br>
</div>

<div class="right">
<section class="wrapper">
 <h3>Doctor List For PCOD / PCOS Consultation<hr></h3>

<?php
$select_table = "select * from doctor";
$fetch= mysql_query($select_table);
while($row = mysql_fetch_array($fetch))
{
?>
<h1><u><?php echo $row['Hospital_name']; ?></u></h1>
<b>Doctor Name - </b><?php echo $row['Hospital_head_name']; ?><br>
<b>Contact - </b><?php echo $row['Hospital_contact']; ?>
<p><b>Address - </b>
<?php echo $row['Hospital_address']; ?>
</p>

<hr>
					
<?php
}
?>		  
</section>



</div>
</div>
</div>
</div>
