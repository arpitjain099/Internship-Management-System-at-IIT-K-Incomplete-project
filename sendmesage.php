<html><head><link rel="stylesheet" type="text/css" href="background.css"></head></html>

<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add to selected students list</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
	</head>
	<body><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="messagesubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>To which roll no?</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="torollno" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Message</TD>
    <TD><TEXTAREA NAME="Address" ROWS=3 COLS=30 >Dear Student,
    Your message goes here
Regards,
Team SPO</TEXTAREA></TD>
  </TR>
  <TR>
    <TD>Email of our person in contact</TD>
    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
