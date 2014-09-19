
<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
<title>
Redirection page
</title>
<script>
<!--
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
{
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
<script type="text/javascript">
function redirect(){window.location="failedlogin.php";}
function redirectnormal(){window.location="status.php";}
function redirectcreateaccount(){window.location="firsttime.php";}
//-->
function cleardata(){<?php
session_destroy();
?>
window.location="index.php";}
</script>
</head>
<body>  <div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
<?php
// Create connection

$conn = ftp_connect("vyom.cc.iitk.ac.in") or die("Could not connect");

  //$res1=mysqli_query($con,"SELECT * FROM login INTO OUTFILE '/xampp/htdocs/tut/outfile.csv';");
 //echo $res;
  //print '$res';
$a=$_POST["username"];
 echo " <center>";
 $conn = ftp_connect("vyom.cc.iitk.ac.in") or die("Could not connect");
if(ftp_login($conn,$_POST["username"],$_POST["password"])) {
  //session_start();
   //$_SESSION['user']='normal';echo "<script>redirectnormal();</script>";
  $con=mysqli_connect("localhost","root","jain","mba654");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  
//echo $a;
$sql="SELECT issue_status FROM status WHERE '$a'=username;";
$res1=mysqli_query($con,$sql);
  if (!$res1) {
    die('Errorss:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
$row = mysqli_fetch_array($res1);
if($row==-1){
  setcookie("user", '$a', time()+3600);echo "<script>redirectcreateaccount();</script>";}
  }
else "<script>redirectnormal();</script>"
  //else echo "<script>redirect();</script>";
//-->  

echo "  </center>";
?>
</body>
</html>