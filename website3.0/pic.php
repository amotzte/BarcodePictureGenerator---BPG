<html><body>
<?php




include 'getimage.php';
include 'unit_test.php';



$unit_test=$_POST['debug'];


$url = $_POST['url'];
$user_number=rand(0,9999999999999);
echo $user_number;
make_qr($url,$user_number);
$target_path = "uploads/";
$target_path = $target_path . basename($_FILES['pic']['name']);
echo "(". $target_path . ") <BR>";
if (move_uploaded_file($_FILES['pic']['tmp_name'],$target_path))
{
	echo "The File". basename($_FILES['pic']['name'])."has been uploaded <BR>";
    echo "The adress entered was . $url <BR>";
} 
else
{
	echo "there was an error uploading <BR>";
}


rename($target_path, "uploads/".$user_number."_user_pic");
$qr_user="uploads/".$user_number."_qr.png";
$pic_user='uploads/'.$user_number.'_user_pic'; 



if ($unit_test){
        echo "checking if both files are found...<BR>";
        if(check_files($pic_user,$qr_user))
            echo "OK<BR>";
        else
            echo "FAIL<BR>";
            
  	
         echo "<BR>checking if the QR directs to the original URL....<BR>";
         $ip = "http://bpg.145mb.com"; 
         $qr_user=$ip.'/'.$qr_user;
         echo $qr_user.", " . $url."<BR>" ; 
         http_response($qr_user,"http://".$url);
         echo "<BR>";
         
         ?>
         <img src="<? echo $qr_user; ?>" width="200" height="200" alt="<? echo $qr_user; ?> (QR_original)">
	<img src="<? echo $pic_user; ?>" width="200" height="200" alt="<? echo $pic_user; ?> (USER_picture)">
	<?
         
}

?>


</body></html>

