<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
	<title>Manage Applications</title>
	<?php
$conn = ftp_connect("vyom.cc.iitk.ac.in") or die("Could not connect");
if(ftp_login($conn,$_POST["companyname"],$_POST["password"]))echo "Yo!"; else echo "bajar";

ftp_close($conn);
?>
</html>