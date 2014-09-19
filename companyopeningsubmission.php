<html><head><link rel="stylesheet" type="text/css" href="background.css"></head>
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
  $a2=$_POST["description"];
  $a3=$_POST["location"];
  $a4=$_POST["stipend"];
  $a5=$_POST["cpi"];
  $a6=$_POST["department"];
  $a7=$_POST["id"];
   $a8=$_POST["information"];
    $a9=$_POST["deadline"];
     $a10=$_POST["personmanaging"];
  $sql1="INSERT INTO secretary VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','a10');";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}

?><a href="companyopening.php">click</a> here to add more companies!<br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>