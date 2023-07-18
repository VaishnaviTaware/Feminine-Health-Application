</br></br></br>

<div class="col-sm-12" ng-app="AngularApp" ng-controller="HelloController">
</br>
<div class="row">
        
<div class="col-lg-12" id="ChatList" style="border: 1px solid var(--light);">		

<div class="center">
        <h1>PCOD/PCOS Report</h1>
		<br>		
</div>
<hr>
<div class="right">

Name - <?php echo $_SESSION['username']; ?><br><br>

Date -<?php echo $Rdate; ?><br><br>

Report - Positive<br><br>

<?PHP
$select_table = "select * from user where UID=".$_SESSION['userid'];
$fetch= mysql_query($select_table);

while($row = mysql_fetch_array($fetch))
{
	echo "BCI Synonyms - ".$row['Detectv']."<br><br>";
	echo "BMI - ".$row['BMI']."<br>(".$row['BMIRES'].")<br>";
}
?> 	 	



<hr>


PCOD is a condition in which ovaries produce many immature or partially mature eggs, this happen due to poor lifestyle, obesity, stress and hormonal imbalance.<br><br>

PCOS can cause missed or irregular menstrual periods, excess hair growth, acne, infertility, and weight gain. Women with PCOS may be at higher risk for type 2 diabetes, high blood pressure, heart problems, and endometrial cancer<br><br>

<b>Symptoms</b><br>
Common symptoms include irregular or missed periods, hirsutism (hair growth on the face, chest, stomach, around the nipples, back, thumbs or toes), infertility due to lack of ovulation, decreased breast size, acne, thinning of scalp hair, and acanthosis nigricans (dark or thick skin markings and creases around the armpits, groin, neck, and breasts).<br>

<b>Irregular periods or no periods at all.</b><br>
difficulty getting pregnant (because of irregular ovulation or failure to ovulate)
excessive hair growth (hirsutism) – usually on the face, chest, back or buttocks.
weight gain.
thinning hair and hair loss from the head.
oily skin or acne.

<br><br>

<b>Which is more harmful PCOS or PCOD?</b><br>

While PCOS is more severe than PCOD, both can be treated if they are detected in time. Following a healthy diet and fitness regime can help control the symptoms and improve the hormonal imbalances which occur because of PCOS and PCOD<br>


<b>Types of PCOS </b><hr><br>

<b>1. Insulin-resistant PCOS</b><br>
This is the most common type of PCOS. This type of PCOS is caused by smoking, sugar, pollution, and trans fat. In this, high levels of insulin prevent ovulation and trigger the ovaries to create testosterone.<br>

If you have been told by your doctor that you are a diabetic on borderline and your glucose tolerance test was not normal. If you have increased levels of insulin and you are overweight, then you might be one having insulin resistance PCOD.<br>

TIP- QUIT SUGAR! just shun the sugar, it should be your first step. A little amount of sugar is healthy but by taking it in large quantities you are contributing to insulin resistance. To prevent insulin resistance PCOS you can take inositol. A period of almost six to nine months is needed to improve from this type of PCOS as it is a slow process.<br><br>


<b>2. Pill-induced PCOS</b><br>
This type is the second most common PCOS. It gets developed due to the birth control pills which suppress ovulation. For most women, these effects do not last long and they resume ovulating after the effect of the pill is over. But some women do not resume ovulating for months and years even after the effects of pills get over. During that time women should consult the doctor.<br>

If you experience regular and normal periods before starting with the pills then this might be a sign of Pill-induced PCOS. Or if your levels of LH are increased in the blood test then this could be a sign too.<br><br>

<b>3. Inflammatory PCOS</b><br>
In PCOS due to inflammation, ovulation is prevented, hormones get imbalanced and androgens are produced. Inflammation is caused due to stress, toxins of the environment, and inflammatory dietary like gluten.<br>

If you have symptoms such as headaches, infections, or skin allergies and your blood tests show that you are deficient in vitamin D, your blood count is not normal, increased levels of thyroid then you might be one having inflammatory PCOS.<br><br>

TIP- DON’T TAKE STRESS! Stop consuming inflammatory foods like dairy products, sugar, or wheat. Start taking supplements of magnesium as it has anti-inflammatory effects. The process of improvement takes about nine months as it is a slow process.<br><br>

<b>4. Adrenal PCOS</b><br>
This type of PCOS is due to an abnormal stress response and affects around 10% of those diagnosed. Typically DHEA-S (another type of androgen from the adrenal glands) will be elevated alone, and high levels of testosterone and androstenedione are not seen. This type of androgen unfortunately isn’t often tested, unless you go through an endocrinologist or other specialist.<br><br>

<b>Long-term health risks of PCOS</b><br>
Increased risk of the development of diabetes, especially if women are overweight. cholesterol and blood fat abnormalities. cardiovascular disease (heart disease, heart attack and stroke) endometrial cancer (if there is long-standing thickening of the lining of the womb).<br><br>
 
<b>Doctor Consultation</b><br>

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

<img src="PeriodBlood.jpg" style="width:60%;">
    </div>
</div>
<br><br>
<input type="submit" id="Button1" onclick="window.print();return false;" name="Button1" value="Print" >
<br><br><br>
</div>
