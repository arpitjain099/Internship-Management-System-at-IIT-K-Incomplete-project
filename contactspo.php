
<html>
<head><link rel="stylesheet" type="text/css" href="faillogin.css">
<title>
Retrieve your password.Contact us for further queries.
</title>
</head>
<center>
<body><?php //echo $_COOKIE['user'];
if(isset($_COOKIE['user']))
setcookie("user", $_COOKIE['user'], time()+3600);	?>
<br>
<br>
<br>
Drop in a mail to <a href="mailto:sposecy@iitk.ac.in">SPOSECY</a> explaining the issue in detail.
</body>
</center>
</html>