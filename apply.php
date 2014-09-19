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
<form method="POST" ACTION="uploadresume.php" enctype="multipart/form-data"> 
Company Name: <input type="text" name="companyname" onkeyup="showHint(this.value) "><br>
Suggestions: <span id="txtHint"></span><br><br><br>
 <input type = "checkbox"
                 name="agree" >
             I agree to the <a href="rules.pdf">rules</a> of SPO.<br><br>

<input type="submit" name="submit" value="Submit">
</form></center>
<?php
 {
if (isset($_POST['submit'])){
 
$pdfDirectory = "pdf/";
$thumbDirectory = "pdfimage/";
 
//get the name of the file
$filename = basename( $_FILES['pdf']['name'], ".pdf");
 
//remove all characters from the file name other than letters, numbers, hyphens and underscores
$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename).".pdf";
 
//name the thumbnail image the same as the pdf file
$thumb = basename($filename, ".pdf");
 
    if(move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfDirectory.$filename)) {
     
    //the path to the PDF file
    $pdfWithPath = $pdfDirectory.$filename;
     
    //add the desired extension to the thumbnail
    $thumb = $thumb.".jpg";
     
    //execute imageMagick's 'convert', setting the color space to RGB and size to 200px wide
    exec("convert \"{$pdfWithPath}[0]\" -colorspace RGB -geometry 200 $thumbDirectory$thumb");
         
    //show the image
    echo "<p><a href=\"$pdfWithPath\"><img src=\"pdfimage/$thumb\" alt=\"\" /></a></p>";
    }
}
 }
?>


