<html>
<head><title>BPG - Picture Barcode Generator</title>

</head>


<script type="text/javascript">
function validateForm()
{
var file=document.forms["myForm"]["pic"].value;
var url=document.forms["myForm"]["url"].value;
if (file==null || file=="")
  {
  alert("You must browse a file");
  return false;
  }
if (url=="URL")
  {
  alert("You must Enter a URL");
  return false;
  }
 
}


</script>



<body>
<div align="center">

<img src="files/barcode.jpg" alt="some" align="middle"/>
<FORM name="myForm" action="pic.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" >
<INPUT name="pic" type="file" accept="image/*"  size="25" value="Picture" onFocus="if(this.value == 'Picture') {this.value = '';}"	    onBlur="if (this.value == '') {this.value = 'Picture';}"/>
</div>

<div align="center">
<INPUT name="url" type="text" size="25" value="URL" onFocus="if(this.value == 'URL') {this.value = '';}"	    onBlur="if (this.value == '') {this.value = 'URL';}"/>
</div>
<div align="center">
<input type="checkbox"  name =debug  value=1 / > use debug mode <BR/>
<INPUT type=submit value=Submit>

</FORM>
</div>

<p align="left">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783501847425625";
/* 145MBCOMVERTICAL */
google_ad_slot = "7509279541";
google_ad_width = 120;
google_ad_height = 240;
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<p align="center">&nbsp;</p></p></p></p></p>
<p align="center"><font size="2"><span>&nbsp;</span></font></p>
<hr style="width: 99%; height: 1px; background-color: #3366ff" align="center" color="#3366ff" noshade="noshade" />
<div align="center"><font size="2"><span>&nbsp;<a href="https://github.com/amotzte/BarcodePictureGenerator---BPG/issues/4" title="">Report Bug</a></span></font><br />


</body>
</html>

