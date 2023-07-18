</br></br></br>

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">
        
<div class="col-lg-12" id="ChatList" style="border: 1px solid var(--light);">		

<div class="right">
        <h1>Health Video?</h1>
		<br>
</div>

<div class="right">
<section class="wrapper">
 <h3>Some lifestyle related vedios<hr></h3>

<?php
$select_table = "select * from videolink order by vid desc";
$fetch= mysql_query($select_table);
while($row = mysql_fetch_array($fetch))
{
?>

<h3><u><?php echo $row['vtitle']; ?></u></h3><br>
 <iframe  style="height:450px;width:100%"
src="<?php echo $row['vurl']; ?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen">

</iframe> 

								<p>
									<?php echo $row['videoinfo']; ?>
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
