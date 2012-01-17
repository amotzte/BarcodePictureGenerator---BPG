<html>
<head><title>Main</title>


  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js">
  
<script type="text/javascript" src="lib/jquery-1.4.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  
 
  $(".no").hide();
  $("p").hide();
  $("head1").hide();
  $("head1").fadeIn(5000);
  $(".no").click(function(){
    $("p").slideUp();
    $(".yes").show();
    $(".no").hide();

    
  });
  $(".yes").click(function(){
   // $("#progressbar").progressbar({ value: 37 });

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




  
  <script>

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

<head1><font color="#3333cc"><font size="6">Create QR barcode with a picture/logo</font></font>
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
<div id="progressbar" style="width: 37%;" ></div>
</div>
<div align="right">
<input type="checkbox" onClick="if (this.checked) {msg();}"  name =debug  value=1 / >debug mode <BR/>

</FORM>
</div>
<br>
<br>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>






</form_body>
<div align="left">


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
</ad>

</body>
</html>

