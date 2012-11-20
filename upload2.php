<?php

session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}

function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);


if (move_uploaded_file($_FILES['image_file']['tmp_name'], "upload/".$_SESSION['id'].".image2.jpg")) {
	include_once("imageprocess.php");
	$target_file = "upload/".$_SESSION['id'].".image2.jpg";
	$resized_file = "upload/".$_SESSION['id'].".image2.jpg";
	$wmax = 800;
	$hmax = 600;
	img_resize($target_file, $resized_file, $wmax, $hmax, "jpg");
	
	$target_file = "upload/".$_SESSION['id'].".image2.jpg";
	$thumbnail = "upload/".$_SESSION['id'].".image2.jpg";
	$wthumb = 450;
	$hthumb = 450;
	img_thumb($target_file, $thumbnail, $wthumb, $hthumb, "jpg");

}
echo <<<EOF
<p>Your file: {$sFileName} has been successsfully received.</p>
<p>Type: {$sFileType}</p>
<p>Size: {$sFileSize}</p>
EOF;
?>