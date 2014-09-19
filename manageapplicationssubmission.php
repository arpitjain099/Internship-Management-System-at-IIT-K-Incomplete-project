<html><head><link rel="stylesheet" type="text/css" href="background.css"></link></head>
<?php $con=mysqli_connect("localhost","root","jain","spo");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
	//<?php $_POST["roll"]='';?><html><head><link rel="stylesheet" type="text/css" href="background.css"><script>function getcsv(){window.location="csvoutput.php"}</script></head>
<?php //echo $_GET["roll"];
$a=$_POST["companyname"];
echo $a;
$sql="SELECT * FROM company WHERE '$a'=company.name ORDER BY roll_no;";
$res1=mysqli_query($con,$sql);
  if (!$res1) {
    die('Errorss:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
$row = mysqli_fetch_array($res1);
$a=$row['id'];
$sql="SELECT * FROM application WHERE '$a'=id ORDER BY roll_no;";
$res1=mysqli_query($con,$sql);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Name &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Roll no &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['roll_no'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Email &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['email'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Department &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['department'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Room No&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['room_no'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Hall &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['hall'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> CPI &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['cpi'] . "&nbsp&nbsp&nbsp</td></tr>";
  }
echo "</table>";
//$output="SELECT * INTO OUTFILE '/result.csv'
//FIELDS TERMINATED BY ',
//FROM attendance WHERE '$a'=roll_no ORDER BY event_id;";$res2=mysqli_query($con,$output);
?><br> <button type="submit" onclick="getcsv()">Get CSV file of attendance records</button>
<br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a></html>