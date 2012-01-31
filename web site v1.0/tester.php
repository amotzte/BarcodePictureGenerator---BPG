<title></title>
<!-- Place this tag in your head or just before your close body tag --> <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>      <script type="text/javascript" src="lib/jquery-1.4.2.js"></script> <script type="text/javascript">
$(document).ready(function(){
  $("head1").fadeIn(5000);
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
</script>  <!--google stat--> <script type="text/javascript">

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
</script>         <script type="text/javascript">
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

function up(){
$("s").show();
}

</script>
<div id="fb-root">&nbsp;</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div align="center">     <center> <img align="middle" alt="head" src="files/head_pic.png" /></center>       <br />
<br />
<br />
<br />
<head1 style="display:none">
<font color="#3333cc"><font size="6">Create QR barcode with a picture/logo</font></font> <br />
<br />
<br />
<br />
</head1>
    
<form_body>
<form onsubmit="up()" enctype="multipart/form-data" method="post" action="pic_tester.php" name="myForm">
    <input type="file" onBlur="if (this.value == '') {this.value = 'Picture';}" onFocus="if(this.value == 'Picture') {this.value = '';}" value="Picture" size="25" accept="image/*" name="pic" />
    <div align="center">http:// <input type="text" onBlur="if (this.value == '') {this.value = 'URL';}" onFocus="if(this.value == 'URL') {this.value = '';}" value="URL" size="25" name="url" /> <br />
    <br />
    Enter QR size:      <select name="qrsize">
    <option value="100">100X100</option>
    <option value="200">200X200</option>
    <option selected="" value="300">300X300</option>
    <option value="400">400X400</option>
    <option value="500">500X500</option>
    </select>  <br />
    <font color="#FF0000">(It is important that you choose the read size you are going to use)   </font><br />
    <br />
    <p style="display:none"><br />
    <input type="text" onBlur="if (this.value == '') {this.value = '100';}" onFocus="if(this.value == '100') {this.value = '';}" value="100" size="3" name="trans" />%<br />
    </p>
    <button onClick= "trans.value=100" type="button" style="display:none" class="no">Remove Transparency</button> <button type="button" class="yes">Add Transparency</button>     <br />
    <br />
    <input type="submit" onclick="return validateForm()" value="Submit" /> <br />
       publish my QR <input type="checkbox" name=publish value=1 />
    </div>
    <!--<input type="checkbox" onClick="if (this.checked) {msg();}"  name =debug  value=1 / >debug mode <BR/> -->
</form>
<s style="display:none"> <img border="0" alt="loading" src="/files/loading.gif" /> </s>  <br />
<br />
<br />
<br />
<div data-header="false" data-stream="false" data-show-faces="false" data-width="292" data-href="http://www.facebook.com/pages/Logo-Barcode/135730236544660" class="fb-like-box">&nbsp;</div>
</form_body>
</div>
<br />
<br />
<div align="center">
<form target="_blank" method="post" action="https://www.paypal.com/cgi-bin/webscr">
    <input type="hidden" value="_s-xclick" name="cmd" /> <input type="hidden" value="-----BEGIN PKCS7-----MIIHPwYJKoZIhvcNAQcEoIIHMDCCBywCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAj9sYvIn+mfUbrijza7x3th7CYaQL5wJsddoaEJtPBq/nlZnGCk6x9AiHb4Mi9r4q2GoSMWDRlj6QGzMiHf/sMFk3UJrI49+c7yiwT6rm1zYUwN8PczUzbBUAjG7e4uIogKHm1GIT1zYFcSeI7H/SY8SOkFsU/eOnVD2DOM7aTBzELMAkGBSsOAwIaBQAwgbwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI/NQkiCI/spCAgZhK8pDZMmIRrUnsd6UDjlvL/hZIe2w4BmNQ2JXodc4yNzed8XXIpIGwLxkB9XWQprVGYiPH0Qk0rG46UD4lTKcB60+FhwyRzgE88WeZolibEVxFY6SgsO9yJiy3BR38RvbJaE+r/uYetnED4yZ4/fF6+NitMAs2ezZhv6+YUMiH1IftEvdV89mIbVVRMDTee2sIKGXIxrmJ86CCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTEyMDExMjExMDAwMlowIwYJKoZIhvcNAQkEMRYEFD8C5RD+Iy+ZQH7jFZy2PUUmMoHpMA0GCSqGSIb3DQEBAQUABIGAJkrAaOsRLa43SlMHLkDSgdHT/7Of+Zki7dCPTJhNZr74EiqNNHlabmLtbTYCryZjW+UQ1YLOlzMFCR1HsHdkcyUWtQstNOZk6wROYQkL9yZ6o3C+Cj/4eLdn3kdVXSKJMTAmErJdJFKUyvwTtB+AlH/aLe73mW0QziP35GJ5tsE=-----END PKCS7-----
    " name="encrypted" /> <input type="image" border="0" alt="PayPal — The safer, easier way to pay online." name="submit" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" /> <img width="1" border="0" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" />
</form>
<!-- Place this tag where you want the +1 button to render --> <!--<g:plusone></g:plusone>--> </div>
</blockquote> </div>   
  
    
