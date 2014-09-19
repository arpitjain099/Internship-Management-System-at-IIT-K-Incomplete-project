

<html><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Plug in first time details(One Time only!)</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
	</head>
	<body><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="firsttimesubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Roll No</TD>
    <TD><INPUT TYPE="TEXT" NAME="rollno" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>ID</TD>
    <TD><INPUT TYPE="TEXT" NAME="id" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Hall</TD>
    <TD><INPUT TYPE="TEXT" NAME="hall" SIZE="25"></TD>
  </TR>
 
</TABLE>
<h3>Please check the values you have given before clicking on the Submit button!!
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
	</body>
</html>