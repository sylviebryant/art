<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Mashup</title> 	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 
<div data-role="page">

	<div data-role= "header">
		<a href = "photopreview.php" data-role = "button" data-theme = "a"> Back </a>
		<h1>Mashups</h1>
		<a href = "mashup.php" data-role = "button" data-theme="b" rel = "external"> Remash</a>

	</div><!-- /header -->

	
<?php

include "phmagick.php";
$binary = rand(0,1);
if ($binary == 0) { 
	$image1 = "upload/".$_SESSION['id'].".image1.jpg";
	$image2 = "upload/".$_SESSION['id'].".image2.jpg";
	}
else {
	$image1 = "upload/".$_SESSION['id'].".image2.jpg";
	$image2 = "upload/".$_SESSION['id'].".image1.jpg";
}
//version1

 $p = new phmagick($image2, 'upload/'.$_SESSION['id'].'.v1bottom.jpg');
 $p->darken(30);
 $p->contrast();
 
 $p = new phmagick($image1, 'upload/'.$_SESSION['id'].'.v1top.jpg'); 
 $p->rotate(rand(150, 210));
 $p->smooth();
 $times = rand (1, 3);
 for ($i = 0; $i < $times; $i++){
 $p->contrast();
 }
 $phMagick = &new phMagick('upload/'.$_SESSION['id'].'.v1bottom.jpg', 'images/'.$_SESSION['id'].'.v1.jpg');
 $phMagick->watermark('upload/'.$_SESSION['id'].'.v1top.jpg', phMagickGravity::Center, 60);

//version2
	include_once("imageprocess.php");
 $p = new phmagick($image2, 'upload/'.$_SESSION['id'].'.v2bottom.jpg');
 $p->reflection(60,50);
 $p = new phmagick($image1, 'upload/'.$_SESSION['id'].'.v2top.jpg');
 //either sepia/toGreyScale/nothing
 $option = rand(0,2);
 if ($option == 1) $p->sepia();
 else if ($option == 0) $p->toGreyScale();
 
 //saturate based on rand times
 $times = rand (1, 3);
 for ($i = 0; $i < $times; $i++){
  $p->saturate();
  $p->saturate();
 }
 $phMagick = &new phMagick('upload/'.$_SESSION['id'].'.v2bottom.jpg', 'images/'.$_SESSION['id'].'.v2.jpg');
 $phMagick->watermark('upload/'.$_SESSION['id'].'.v2top.jpg', phMagickGravity::Center, rand(20,40));
 
 $target_file = "images/".$_SESSION['id'].".v2.jpg";
	$thumbnail = "images/".$_SESSION['id'].".v2.jpg";
	$wthumb = 450;
	$hthumb = 450;
	img_thumb($target_file, $thumbnail, $wthumb, $hthumb, "jpg");



//version3
$p = new phmagick($image1, 'upload/'.$_SESSION['id'].'.v3bottom.jpg');	
$p->sharpen();
$p->sepia();

$p = new phmagick($image2, 'upload/'.$_SESSION['id'].'.v3top.jpg');
$option = rand(0,2);
 if ($option == 1) $p->invertColors();
 else if ($option == 0) $p->sepia();

$phMagick = new phmagick('upload/'.$_SESSION['id'].'.v3bottom.jpg','images/'.$_SESSION['id'].'.v3.jpg');
$phMagick->watermark('upload/'.$_SESSION['id'].'.v3top.jpg', phMagickGravity::Center, rand(50,80)); 

//version4
$p = new phmagick($image1, 'upload/'.$_SESSION['id'].'.v4bottom.jpg');	
$p->contrast();
$p->saturate();

$p = new phmagick($image2, 'upload/'.$_SESSION['id'].'.v4top.jpg');
$p->rotate(rand(30, 60));
$p->toGreyScale();

$phMagick = new phmagick('upload/'.$_SESSION['id'].'.v4bottom.jpg','images/'.$_SESSION['id'].'.v4.jpg');
$phMagick->watermark('upload/'.$_SESSION['id'].'.v4top.jpg', phMagickGravity::Center, rand(50,80)); 



?>




	<div data-role="content">	
<h3><font color = "blue">Click on your favorite mashup:</font></h3>
<table>
<tr>
<td><a href="saveimage1.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v1.jpg' width = "100%"/></a></td>
<td><a href="saveimage2.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v2.jpg' width = "100%"/></a></td>
</tr>
<tr>
<td><a href="saveimage3.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v3.jpg' width = "100%" /></a></td>
<td><a href="saveimage4.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v4.jpg' width = "100%" /></a></td>
</tr>
</table>

</div>
</div>
</body>
</html>