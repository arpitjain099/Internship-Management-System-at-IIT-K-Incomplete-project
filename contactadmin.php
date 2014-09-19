
<html>
<head><link rel="stylesheet" type="text/css" href="faillogin.css">
<title>
Retrieve your password
</title>
</head>
<center>
<body><?php //echo $_COOKIE['user'];
if(isset($_COOKIE['user']))
setcookie("user", $_COOKIE['user'], time()+3600);	?>
<br>
<br>
You have come to this page because you forgot your credentials.
<br>

<form action="contactadmin.php" method="post" autocomplete="off">
Input your rollno:<input type="text" name="rollno">
<br>
Old Password:<input type="password" name="oldpass">
<br>
New Password:<input type="password" name="newpassword">
<br>
Retype your Password:<input type="password" name="newpassword1">
<input type="submit">
<?php $a=0;$b=0;$c=0;
$a=11111;$b=0;$c=0;$d=0;
$a=$_POST["rollno"];
$b=$_POST["oldpass"];
$c=$_POST["newpassword"];
$d=$_POST["newpassword1"];
if(($c==$d) AND ((11000<$a) AND ($a<11830))){
$con=mysqli_connect("localhost","root","jain","spo");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $sql="SELECT * FROM login WHERE roll_no='$a' AND login.password='$b';";
  $res=mysqli_query($con,$sql);
  if(count(mysqli_fetch_array($res))) {
  //session_start();
   //$_SESSION['user']='normal';echo "<script>redirectnormal();</script>";
   $sqlcommit="update login set password='$c'WHERE roll_no='$a' AND login.password='$b'";
   $res1=mysqli_query($con,$sqlcommit);
   echo "<br>Password changed successfully<br>";
  }
  else die('<h3><center><br><br>Password is incorrect<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error());
  }
else if(!($c==$d))die('<h3><center><br><br>Passwords do not match!<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to go to the login panel.</center></h3>' . mysql_error());
else if(!((11000<$a) AND ($a<11830)))die('<h3><center><br><br>Range is incorrect!<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to go to the login panel.</center></h3>' . mysql_error());  
  

 
?>
<br>
Drop in a mail to <a href="mailto:spoadmin@iitk.ac.in">Admin</a> with your details to retrive your password.
</body>
</center>
</html>