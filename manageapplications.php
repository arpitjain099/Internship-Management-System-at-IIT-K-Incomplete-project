<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
	<title>Manage Applications</title>
	<script>
function showHint(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethint.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body><br><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
	<FORM method="post" autocomplete="off"action="manageapplicationssubmission.php">
Start typing a name in the input field below:</b><br><br>
<form method="POST" ACTION="searchcompanycompanysubmission.php"> 
Company Name: <input type="text" name="companyname" onkeyup="showHint(this.value) "><br>
Suggestions: <span id="txtHint"></span><br>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1">
</FORM><br>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
</body>
</html>