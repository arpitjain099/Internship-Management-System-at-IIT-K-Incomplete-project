<html>
<head>
<link rel="stylesheet" type="text/css" href="background.css"></head>
<?php $con=mysqli_connect("localhost","root","jain","spo");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $sql="SELECT * FROM message where 11001=torollno order by timestamp;";
  $res1=mysqli_query($con,$sql);if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}

while($row = mysqli_fetch_array($res1))
  {
  if($row['message']!=''){echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Message &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['message'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Email id to be contacted &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['contactemail'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> Time of message post &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['timestamp'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "</table><br><br>";}else echo"Sorry";}
?><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>