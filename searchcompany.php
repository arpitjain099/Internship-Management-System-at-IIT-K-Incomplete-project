<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
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
<body>
<center>
<br><br><br>
<b>Start typing a name in the input field below:</b>
<form method="POST" ACTION="searchcompanycompanysubmission.php"> 
Company Name: <input type="text" name="companyname" onkeyup="showHint(this.value) "><br>
Suggestions: <span id="txtHint"></span><br>
</center>


<table cellspacing="50" cellpadding="0" align="center"><tr><td>CPI Cutoff(min.) <br><input type="text" name="cpi" maxlength="4"/></td>
<td>Department: <br/><select name="department">
<option value="AE">AE</option>
<option value="BSBE">BSBE</option>
<option value="CHE">CHE</option>
<option value="CHEM">Chemistry</option>
<option value="CE">CE</option>
<option value="CSE">CSE</option>
<option value="ECO">Economics</option>
<option value="EE">EE</option>
<option value="MSE">MSE</option>
<option value="MTH">Mathematics</option>
<option value="ME">ME</option>
<option value="PHY">Physics</option>
</select></td>
<td>Deadline <br/><input type="date" name="deadline"/></td>
</tr><br/>
<td>
<input type="submit" name="submit" value="Search" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset" /></td>
</tr></table><br/><br/>
</form>
</td>
</table>

