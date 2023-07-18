<br><br><br>
<?php
$result=mysql_query("select * From user where UID=".$_SESSION['userid']);
while($row=mysql_fetch_array($result))
	{
?>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.form.js"></script>


<script type="text/javascript">
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


<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>



<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">

<div id="previewreg">
</div>
<form id="Regform" action="Profileupd.php" method="post" enctype="multipart/form-data">
<div class="resume">
<div class="resume_left">
<div class="resume_profile">

<style>
#dropnew{
background-color: #fff;
    padding: 100px 50px;
    margin-bottom: 30px;
    border: 5px dashed #F1F2F7;
    border-radius: 3px;
    border-image: url(../img/border-image.png) 25 repeat;
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    color: #7f858a;
}
</style>

<script>
   function chooseFile() {
      $("#fileInput").click();
   }
</script>
		
<style>
.choose_file{
    display:inline-block;    
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #7f7f7f;
	width:100%;
    background:white
}

.choose_file:hover{
	color: #000;
    background:#AAA;
}

.choose_file input[type="file"]{
    -webkit-appearance:none; 
    position:absolute;
    top:0; left:0;
    opacity:0; 
}
</style>
	
	
 <div id="dropnew" class="choose_file">
<input type="button" onclick="chooseFile();" value="Select Profile Photo" name="signin" class="form-control" style="background: #3578e5;background-color: #fff;font-size: 14px;height:80px;" id="FE11">
                                <input type="file" name="Profilefile" id="fileInput">
</div>     

</div>
</div>
  
  <div class="resume_right"><button type='button' style="Float:right;" id="Reg_button" data-ng-click="Reg_button($event)"  class='btn btn-default'>
        Save
        </button>&nbsp;
    <div class="resume_item resume_about">
        <div class="title">  
           <p class="bold">First Name</p>
         </div>
		            <input type="text" placeholder="" id="f-name" class="form-control" Name="FName" placeholder="Work Experience" value="<?php echo $row['Name']; ?>">
    </div>
	
    <div class="resume_item resume_about">
        <div class="title">  
           <p class="bold">Last Name</p>
         </div>
		            <input type="text" placeholder="" id="f-name" class="form-control" Name="LName" placeholder="Work Experience" value="<?php echo $row['Lname']; ?>">
    </div>
	
	<div class="resume_item resume_about">
        <div class="title">  
           <p class="bold">Mobile<p>
         </div>
		            <input type="text" placeholder="" id="f-name" class="form-control" Name="Mob" placeholder="Work Experience" value="<?php echo $row['Mob']; ?>">
    </div>
	
	
		<div class="resume_item resume_about">
        <div class="title">  
           <p class="bold">Email<p>
         </div>
		            <?php echo $row['Email']; ?>
    </div>
	
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">About</p>
         </div>
        <textarea placeholder="" id="f-name" class="form-control" Name="About" placeholder="Education" ><?php echo $row['About']; ?></textarea>
    </div>
	


</div>

</div>
</form>

</div>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Montserrat", sans-serif;
}

body {
  background: #585c68;
  font-size: 14px;
  line-height: 22px;
  color: #555555;
}

.bold {
  font-weight: 700;
  font-size: 20px;
  text-transform: uppercase;
}

.semi-bold {
  font-weight: 500;
  font-size: 16px;
}

.resume {
  width: 800px;
  height: auto;
  display: flex;
  margin: 50px auto;
}

.resume .resume_left {
  width: 280px;
  background: #0bb5f4;
}

.resume .resume_left .resume_profile {
  width: 100%;
  height: 280px;
}

.resume .resume_left .resume_profile img {
  width: 100%;
  height: 100%;
}

.resume .resume_left .resume_content {
  padding: 0 25px;
}

.resume .title {
  margin-bottom: 20px;
}

.resume .resume_left .bold {
  color: #fff;
}

.resume .resume_left .regular {
  color: #b1eaff;
}

.resume .resume_item {
  padding: 25px 0;
  border-bottom: 2px solid #b1eaff;
}

.resume .resume_left .resume_item:last-child,
.resume .resume_right .resume_item:last-child {
  border-bottom: 0px;
}

.resume .resume_left ul li {
  display: flex;
  margin-bottom: 10px;
  align-items: center;
}

.resume .resume_left ul li:last-child {
  margin-bottom: 0;
}

.resume .resume_left ul li .icon {
  width: 35px;
  height: 35px;
  background: #fff;
  color: #0bb5f4;
  border-radius: 50%;
  margin-right: 15px;
  font-size: 16px;
  position: relative;
}

.resume .icon i,
.resume .resume_right .resume_hobby ul li i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.resume .resume_left ul li .data {
  color: #b1eaff;
}

.resume .resume_left .resume_skills ul li {
  display: flex;
  margin-bottom: 10px;
  color: #b1eaff;
  justify-content: space-between;
  align-items: center;
}

.resume .resume_left .resume_skills ul li .skill_name {
  width: 25%;
}

.resume .resume_left .resume_skills ul li .skill_progress {
  width: 60%;
  margin: 0 5px;
  height: 5px;
  background: #009fd9;
  position: relative;
}

.resume .resume_left .resume_skills ul li .skill_per {
  width: 15%;
}

.resume .resume_left .resume_skills ul li .skill_progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: #fff;
}

.resume .resume_left .resume_social .semi-bold {
  color: #fff;
  margin-bottom: 3px;
}

.resume .resume_right {
  width: 520px;
  background: #fff;
  padding: 25px;
}

.resume .resume_right .bold {
  color: #0bb5f4;
}

.resume .resume_right .resume_work ul,
.resume .resume_right .resume_education ul {
  padding-left: 40px;
  overflow: hidden;
}

.resume .resume_right ul li {
  position: relative;
}

.resume .resume_right ul li .date {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 15px;
}

.resume .resume_right ul li .info {
  margin-bottom: 20px;
}

.resume .resume_right ul li:last-child .info {
  margin-bottom: 0;
}

.resume .resume_right .resume_work ul li:before,
.resume .resume_right .resume_education ul li:before {
  content: "";
  position: absolute;
  top: 5px;
  left: -25px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  border: 2px solid #0bb5f4;
}

.resume .resume_right .resume_work ul li:after,
.resume .resume_right .resume_education ul li:after {
  content: "";
  position: absolute;
  top: 14px;
  left: -21px;
  width: 2px;
  height: 115px;
  background: #0bb5f4;
}

.resume .resume_right .resume_hobby ul {
  display: flex;
  justify-content: space-between;
}

.resume .resume_right .resume_hobby ul li {
  width: 80px;
  height: 80px;
  border: 2px solid #0bb5f4;
  border-radius: 50%;
  position: relative;
  color: #0bb5f4;
}

.resume .resume_right .resume_hobby ul li i {
  font-size: 30px;
}

.resume .resume_right .resume_hobby ul li:before {
  content: "";
  position: absolute;
  top: 40px;
  right: -52px;
  width: 50px;
  height: 2px;
  background: #0bb5f4;
}

.resume .resume_right .resume_hobby ul li:last-child:before {
  display: none;
}
</style>

<?php
}
?>