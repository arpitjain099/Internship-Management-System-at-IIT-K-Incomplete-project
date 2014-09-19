<html><head><?php
setcookie("user", $_COOKIE['user'], time()+3600);	?><link rel="stylesheet" type="text/css" href="background.css"></head>
<?php $con=mysqli_connect("localhost","root","jain","mba654");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $a8=$_COOKIE["user"];
$sql="SELECT issue_status FROM status WHERE '$a8'=username;";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
$row = mysqli_fetch_array($res1);
if($row==-1){
  setcookie("user", '$a', time()+3600);echo "<script>redirectcreateaccount();</script>";}
  }
?><a href="index.php">Click here to go back to login panel again.</a>