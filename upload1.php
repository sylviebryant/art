<?php
global $a;
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
	$a=$_SESSION['id'];

function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);


if (move_uploaded_file($_FILES['image_file']['tmp_name'], "upload/$a.image1.jpg")) {
	
}


echo <<<EOF
<p>Your file: {$sFileName} has been successsfully received.</p>
<p>Type: {$sFileType}</p>
<p>Size: {$sFileSize}</p>
EOF;

?>


