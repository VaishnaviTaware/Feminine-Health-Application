</br></br></br>

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">
        
<div class="col-lg-7" id="ChatList" style="border: 1px solid var(--light);">		
<script type="text/javascript" src="js/jquery.form.js"></script>

<div class="right">
<script type="text/javascript">
// Paging Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$("#BMICAL").click(function() {
var the_height = $("#height").val();
var the_weight = $("#weight").val();
 
var the_BMI = the_weight / (the_height/100)**2;
//alert(the_BMI);

$("#BMIRESULT").html("Your Body Mass Index is : "+the_BMI);


if(the_BMI <= 18.5){
$("#BMINOTE").html("Oops! You are underweight."); 
$("#BMIRES").val("You are underweight"); 
}
else if(the_BMI <= 24.9){
$("#BMINOTE").html("Awesome! You are healthy.");
$("#BMIRES").val("You are healthy"); 
}
else if(the_BMI <= 29.9){ 
$("#BMINOTE").html("Eee! You are over weight."); 
$("#BMIRES").val("You are over weight"); 
}
else{  
$("#BMINOTE").html("Seesh! You are obese.");
$("#BMIRES").val("You are obese"); 
}

$("#BMIVAL").val(the_BMI);

					$("#BMIform").ajaxForm({
						target: '#previewreg'
					}).submit();
	
	return false;
});
});
</script>


<form id="BMIform" action="BMIupd.php" method="post" enctype="multipart/form-data">
<input type="hidden" id="BMIVAL" Name="BMI" value="0">
<input type="hidden" id="BMIRES" Name="BMIRES" value="">
</form>

<div class="right">
        <h1>BMI Calculater</h1>
		<br>
</div>
<p class="bold">Enter the height in cm</p>
<input type="text" placeholder="" id="height" class="form-control" Name="height" placeholder="Enter the height in cm" value="0">
					<br>
<p class="bold">Enter the weight in kg</p>
<input type="text" placeholder="" id="weight" class="form-control" Name="weight" placeholder="Enter the height in cm" value="0">
<br>
<input type="Button" id="BMICAL" class="form-control"  value="Calculate">
<hr><br>

<div class="right" id="BMIRESULT">
        <B>Your Body Mass Index is:0</B>
</div>


<div class="right" id="BMINOTE">
        <B>Note </B>
</div>
        </div>
    </div>
</div>

</div>
