<html><head>
<link rel="stylesheet" type="text/css" href="background.css"></head>
<?php if (!($_COOKIE["user"]=='rootlogin'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?>
<?php $con=mysqli_connect("localhost","root","jain","spo");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $a1=$_POST["name"];
  $a2=$_POST["company"];
  $a3=$_POST["roll_no"];
  $sql1="INSERT INTO selectedstudents VALUES('$a2','$a3');";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
$sql2="UPDATE students SET placed=1 WHERE 'a3'=roll_no;";
 $res2=mysqli_query($con,$sql2);
  if (!$res2) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}

?><a href="companyopening.php">click</a> here to add more companies!<br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>