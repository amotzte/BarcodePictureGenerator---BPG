<html><body>
<?php
include 'getimage.php';





$url = $_POST['url'];
$user_number=rand(0,9999999999999);
echo $user_number;
make_qr($url);
$target_path = "uploads/";
$target_path = $target_path . basename($_FILES['pic']['name']);
echo "(". $target_path . ")";
if (move_uploaded_file($_FILES['pic']['tmp_name'],$target_path))
{
	echo "The File". basename($_FILES['pic']['name'])."has been uploaded\n";
    echo "The adress entered was . $url";
} 
else
{
	echo "there was an error uploading";
}


?>
</body></html>

