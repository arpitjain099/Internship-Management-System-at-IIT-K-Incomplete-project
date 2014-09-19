<!--if(!(isset($_SESSION['user'])=='sntsecy')) die('Error:Please make the entry again !' . mysql_error());?>-->
<!--?php if (!($_SESSION["user"]=='SntSecy'))die('Error:Please make the entry again !' . mysql_error()); ?>
?php setcookie("sntsecy", "SntSecy", time()+3600); ?>-->

<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
	<title>Root user logged in!</title>
	<script>
function cleardata(){
window.location='index.php';}
function land(ref, target)
{
lowtarget=target.toLowerCase();
if (lowtarget=="_self") {window.location=loc;}
else {if (lowtarget=="_top") {top.location=loc;}
else {if (lowtarget=="_blank") {window.open(loc);}
else {if (lowtarget=="_parent") {parent.location=loc;}
else {parent.frames[target].location=loc;};
}}}
}
function jump(menu)
{<?php $_COOKIE['user']='rootlogin';?>
ref=menu.choice.options[menu.choice.selectedIndex].value;
splitc=ref.lastIndexOf("*");
target="";
if (splitc!=-1)
{loc=ref.substring(0,splitc);
target=ref.substring(splitc+1,1000);}
else {loc=ref; target="_self";};
if (ref != "") {land(loc,target);}
}

</script>
</head><link rel="stylesheet" type="text/css" href="background.css">
<body>

	
	<div align="right">
		<button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
	<center>------------------
		<br>Click on the following action to go to appropriate links</center><br>
		<center>
			<form>
<select name="choice" size="1" onChange="jump(this.form)">
<option value="">SELECT OPTION BELOW</option>
<option value="companyopening.php">ADD COMPANY OPENING</option>
<option value="manageapplications.php">MANAGE APPLICATIONS</option> <!-- problem here right now-->
<option value="sendmesage.php">SEND MESSAGE TO STUDENTS</option>    <!-- problem here right now-->
<option value="sendemail.php">SEND E-MAIL TO STUDENTS</option> <!-- problem here right now-->
<option value="addselectedstudent.php">ADD TO SELECTED STUDENTS LIST</option>
<option value="query.php">MAKE QUERIES</option>
<option value="faq.php">FAQ'S</option>
<option value="">- - - - - - - - - -</option>
</select>
</form>
</center>
</body>
</html>