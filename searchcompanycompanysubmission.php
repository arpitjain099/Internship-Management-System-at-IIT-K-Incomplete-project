<html>
<head>
<link rel="stylesheet" type="text/css" href="background.css"></head>
<?php 
$con=mysqli_connect("localhost","root","jain","spo");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

$a=$_POST["companyname"];
$b=$_POST["department"];$c=$_POST["cpi"];$d=$_POST["deadline"];
$sql="select * from company where";
if($a!='')
{
if($a!='')$sql=$sql." '$a'=name";
if($b!='')$sql=$sql." AND '$b'=department";
if($c!='')$sql=$sql." AND '$c'>cpi";
if($d!='')$sql=$sql." AND '$d'< deadline;";
//echo $sql4;
$res1=mysqli_query($con,$sql);if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Name &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Description &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['description'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> Location &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['location'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td>Stipend &nbsp&nbsp&nbsp</td>";
  if($row['stipend']==0)echo "<td>No Stipend.Please see company info for any other benefits</td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['stipend'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> CPI constraint&nbsp&nbsp&nbsp</td>";
   if($row['cpi']==0)echo "<td>No CPI constraint </td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['cpi'] . "&nbsp&nbsp&nbsp</td></tr>";
    echo "<tr> "; echo "<td>Other Information &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['information'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td>Deadline &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['deadline'] . "&nbsp&nbsp&nbsp</td></tr>";

  echo "</table><br><br>";
  }
}












else if($a=='' && $b!=''){
if($b!='')$sql=$sql."'$b'=department";
if($c!='')$sql=$sql." AND '$c'>cpi";
if($d!='')$sql=$sql." AND '$d'< deadline;";
//echo $sql;
$res1=mysqli_query($con,$sql);if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Name &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Description &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['description'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> Location &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['location'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td>Stipend &nbsp&nbsp&nbsp</td>";
  if($row['stipend']==0)echo "<td>No Stipend.Please see company info for any other benefits</td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['stipend'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> CPI constraint&nbsp&nbsp&nbsp</td>";
   if($row['cpi']==0)echo "<td>No CPI constraint </td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['cpi'] . "&nbsp&nbsp&nbsp</td></tr>";
    echo "<tr> "; echo "<td>Other Information &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['information'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td>Deadline &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['deadline'] . "&nbsp&nbsp&nbsp</td></tr>";

  echo "</table><br><br>";
  }
}













else if($a=='' && $b==''){
$sql=$sql."'$c'>cpi";
if($d!='')$sql=$sql." AND '$d'< deadline;";
//echo $sql2;
$res1=mysqli_query($con,$sql);if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Name &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Description &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['description'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> Location &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['location'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td>Stipend &nbsp&nbsp&nbsp</td>";
  if($row['stipend']==0)echo "<td>No Stipend.Please see company info for any other benefits</td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['stipend'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> CPI constraint&nbsp&nbsp&nbsp</td>";
   if($row['cpi']==0)echo "<td>No CPI constraint </td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['cpi'] . "&nbsp&nbsp&nbsp</td></tr>";
    echo "<tr> "; echo "<td>Other Information &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['information'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td>Deadline &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['deadline'] . "&nbsp&nbsp&nbsp</td></tr>";

  echo "</table><br><br>";
  }
}
















else if($a=='' && $b=='' && $d!=''){

if($d!='')$sql=$sql." '$d'< deadline;";
//echo $sql1;
$res1=mysqli_query($con,$sql);if (!$res1) {
    die('Error:Please try again.You have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr> "; echo "<td> Name &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td> Description &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['description'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> Location &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['location'] . "&nbsp&nbsp&nbsp</td></tr>";
  echo "<tr> "; echo "<td>Stipend &nbsp&nbsp&nbsp</td>";
  if($row['stipend']==0)echo "<td>No Stipend.Please see company info for any other benefits</td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['stipend'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td> CPI constraint&nbsp&nbsp&nbsp</td>";
   if($row['cpi']==0)echo "<td>No CPI constraint </td></tr>" .  "&nbsp&nbsp&nbsp</td>";else echo "<td>" . $row['cpi'] . "&nbsp&nbsp&nbsp</td></tr>";
    echo "<tr> "; echo "<td>Other Information &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['information'] . "&nbsp&nbsp&nbsp</td></tr>";
   echo "<tr> "; echo "<td>Deadline &nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['deadline'] . "&nbsp&nbsp&nbsp</td></tr>";

  echo "</table><br><br>";
  }
}


//."'$a'=name".else if($b!='')." AND '$b'=department".else if($d!='')" AND '$c'=cpi"." AND '$d'=deadline;";

//echo $sql;

?>