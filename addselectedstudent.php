
<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add to selected students list</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
	<link rel="stylesheet" type="text/css" href="background.css"></head>
	<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="addselectedstudentsubmission.php".php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Roll No.</TD>
    <TD><INPUT TYPE="TEXT" NAME="roll_no" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Email</TD>
    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Company</TD>
    <TD><INPUT TYPE="TEXT" NAME="company" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
