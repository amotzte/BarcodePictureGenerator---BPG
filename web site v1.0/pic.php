<html>
<head>
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

</script>
</head>

<body>
<?php




include 'getimage.php';
include 'unit_test.php';



$debug=$_POST['debug'];

$trans=$_POST['trans'];
if ($trans>100){
	$trans=100;
}
if ($trans<0){
	$trans=0;
} 


$url = $_POST['url'];
$user_number=rand(0,9999999999999);
if ($debug) {echo "userNumber ".$user_number;}
make_qr($url,$user_number);
$target_path = "uploads/";
$target_path = $target_path . basename($_FILES['pic']['name']);
if ($debug) {echo "(". $target_path . ") <BR>";}
if (move_uploaded_file($_FILES['pic']['tmp_name'],$target_path) && getimagesize($target_path))
	{
	    if ($debug){
	    	echo "The File". basename($_FILES['pic']['name'])."has been uploaded <BR>";
	    	echo "The adress entered was . $url <BR>";
	    }
	
	
	
	$ext = substr($target_path, -4);
	rename($target_path, "uploads/".$user_number."_user_pic".$ext);
	$qr_user="uploads/".$user_number."_qr.png";
	$pic_user='uploads/'.$user_number.'_user_pic'.$ext; 
	
	
	$ip = "http://bpg.t15.org";
	
	if ($debug){
	        echo "checking if both files are found...<BR>";
	        if(check_files($pic_user,$qr_user))
	            echo "OK<BR>";
	        else
	            echo "FAIL<BR>";
	            
	  	$qr_user=$ip.'/'.$qr_user;
	         echo "<BR>checking if the QR directs to the original URL....<BR>";

	         echo $qr_user.", " . $url."<BR>" ; 
	         http_response($qr_user,"http://".$url,$debug);
	         echo "<BR>";
	         
	         ?>
	         <img src="<? echo $qr_user; ?>" width="200" height="200" alt="<? echo $qr_user; ?> (QR_original)">
		<img src="<? echo $pic_user; ?>" width="200" height="200" alt="<? echo $pic_user; ?> (USER_picture)">
		<?
	         
	}
	else{$qr_user=$ip.'/'.$qr_user;}
	
	
	// Images folder, must end with slash.
	$images_folder = 'pic/';
	
	// Save watermarked images to this folder, must end with slash.
	$destination_folder = 'generated/';
	
	//user image
	$watermark_path = $pic_user;
	
	// MOST LIKELY YOU WILL NOT NEED TO CHANGE CODE BELOW
	
	// Load functions for image watermarking
	include("watermark_image.class.php");
	
	  // QR-image
	  $image_path = $qr_user;
	
	  // Where to save watermarked image
	  $imgdestpath = $destination_folder . basename($qr_user);
	
	  // Watermark image
	
	   include('SimpleImage.php');
	
	    //$temp='uploads/1192641603_qr.png';
	   $isize= getimagesize($pic_user);
	   $iscale=300/(max($isize[0],$isize[1]));
	   $shrink_percentage=1;
	   if($debug){echo $ip.'/'.$imgdestpath."<BR>";}
	   $i=0;
	   do {
	   $i++;
		   if($debug){echo "<br>try number ".$i;}
		   image_resize($pic_user, $pic_user, $isize[0]*$iscale*$shrink_percentage,$isize[1]*$iscale*$shrink_percentage, 0);
		   $img = new Zubrag_watermark($image_path);
		   $img->ApplyWatermark($watermark_path,$trans);
		   $img->SaveAsFile($imgdestpath);
		   $img->Free();
		   $shrink_percentage=$shrink_percentage-0.2;
	
	   
	  }while (http_response($ip.'/'.$imgdestpath,"http://".$url,$debug)==0 && $shrink_percentage>0.3);
	  

	  ?><div align="center"><img src="<? echo $imgdestpath; ?>" width="300" height="300"  alt="<? echo $imgdestpath; ?> (USER_picture)">
	  <div align ="center">To Save: right click -> save image as...</div>
	  <br>
	  <br>
	  
	  <a href="main.php">Home</a> 
	  
	  <?
	
	}
else
{
	echo "there was an error uploading <BR>";
	
}


?>


</body></html>

