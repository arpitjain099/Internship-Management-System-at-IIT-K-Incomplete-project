<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add company opening</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
	</head>
	<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="companyopeningsubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Company Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Description</TD>
    <TD><INPUT TYPE="TEXT" NAME="description" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Location</TD>
    <TD><INPUT TYPE="TEXT" NAME="location" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Stipend</TD>
    <TD><INPUT TYPE="TEXT" NAME="stipend" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>CPI Requirement</TD>
    <TD><INPUT TYPE="TEXT" NAME="cpi" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Department Allowed</TD>
    <TD><INPUT TYPE="TEXT" NAME="department" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Company id</TD>
    <TD><INPUT TYPE="TEXT" NAME="id" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>More info for students</TD>
    <TD><INPUT TYPE="TEXT" NAME="information" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Deadline</TD>
    <TD><INPUT TYPE="TEXT" NAME="deadline" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Person Managing</TD>
    <TD><INPUT TYPE="TEXT" NAME="personmanaging" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
