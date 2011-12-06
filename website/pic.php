<html><body>
<?php
$url = $_POST['url'];
$target_path = "uploads/";
$target_path = $target_path . basename($_FILES['pic']['name']);
echo "(". $target_path . ")";
if (move_uploaded_file($_FILES['pic']['tmp_name'],$target_path))
{
	echo "The File". basename($_FILES['pic']['name'])."has been uploaded";
} 
else
{
	echo "there was an error uploading";
}


?>
</body></html>

