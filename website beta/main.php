<html>
<head><title>BPG - Picture Barcode Generator</title>

<script type="text/javascript" src="lib/jquery-1.4.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".no").hide();
  $("p").hide();
 // $("form_body").hide();
  $("head1").hide();
  $("head1").fadeIn(5000);
 // $("form_body").fadeIn(1000)
  $(".no").click(function(){
    $("p").slideUp();
    $(".yes").show();
    $(".no").hide();

    
  });
  $(".yes").click(function(){
    $("p").slideDown();
    $(".no").show();
    $(".yes").hide();
  });
});
</script>

<!--google stat-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28099497-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  
function changeLocation()
{
    parent.frames[1].location =" buttom.html" ;
}
</script>




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
function msg(){
	alert("Don't use debug mode...");
}

</script>



<body>
<div align="center">

<head1><font color="#3333cc"><font size="6">Create QR bracode with a picture/logo</font></font>
<br>
<br>
<br>
<br>
</head1>

<form_body >


<FORM name="myForm" action="pic.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" >
<INPUT name="pic" type="file" accept="image/*"  size="25" value="Picture" onFocus="if(this.value == 'Picture') {this.value = '';}"	    onBlur="if (this.value == '') {this.value = 'Picture';}"/>


<div align="center">http://
<INPUT name="url" type="text" size="25" value="URL" onFocus="if(this.value == 'URL') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'URL';}"/>
</div>
<div align="center">


<p><br><INPUT name="trans" type="text" size="3" value="100" onFocus="if(this.value == '100') {this.value = '';}" onBlur="if (this.value == '') {this.value = '100';}"/>%<br></p>
<button class="no" type=button onClick= "trans.value=100" >Remove Transparency</button>
<button class="yes" type=button  >Add Transparency</button>




<br>
<br>
<INPUT type=submit value=Submit  >
</div>
<div align="right">
<input type="checkbox" onClick="if (this.checked) {msg();}"  name =debug  value=1 / >debug mode <BR/>

</FORM>
</div>


</form_body>

<ad align="left">

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

</body>
</html>

