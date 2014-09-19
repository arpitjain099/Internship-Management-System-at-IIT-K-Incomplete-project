<html><head><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><link rel="stylesheet" type="text/css" href="background.css"></head>
<?php $con=mysqli_connect("localhost","root","jain","mba654");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $a1=$_POST["name"];
  $a2=$_POST["rollno"];
  $a3=$_POST["id"];
  $a4=$_POST["hall"];
  $a8=$_COOKIE["user"];
  $sql1="UPDATE student_information
SET name='$a1', rollno='$a2',id='$a3',hall='$a4'WHERE username='$a8';";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
?><a href="index.php">Click here to go back to login panel again.</a>