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
//version1

 $p = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v1bottom.jpg');
 $p->darken(30);
 $p->contrast();
 
 $p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v1top.jpg'); 
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
 $p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v2bottom.jpg');
 $p->reflection(60,50);
 $p = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v2top.jpg');
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
$p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v3bottom.jpg');	
$p->sharpen();
$p->sepia();

$q = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v3top.jpg');
$option = rand(0,2);
 if ($option == 1) $q->invertColors();
 else if ($option == 0) $q->sepia();

$r = new phmagick('upload/'.$_SESSION['id'].'.v3bottom.jpg','images/'.$_SESSION['id'].'.v3.jpg');
$r->watermark('upload/'.$_SESSION['id'].'.v3top.jpg', phMagickGravity::Center, rand(50,80)); 

//version4
$p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v4bottom.jpg');	
$p->contrast();
$p->saturate();

$q = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v4top.jpg');
$q->rotate(rand(30, 60));
$q->toGreyScale();

$r = new phmagick('upload/'.$_SESSION['id'].'.v4bottom.jpg','images/'.$_SESSION['id'].'.v4.jpg');
$r->watermark('upload/'.$_SESSION['id'].'.v4top.jpg', phMagickGravity::Center, rand(50,80)); 



?>




	<div data-role="content">	
<p>Select the mashup that you like best:</p>
<div class="ui-grid-a" margin-right="20px">
	<div class="ui-block-a">
	<a href="saveimage1.php" rel="external">
		<img width="100%" src='images/<?php 
				echo $_SESSION['id'];
				?>.v1.jpg'/>
		</a></div>
	<div class="ui-block-b">
	<a href="saveimage2.php" rel="external"><img width="100%" src='images/<?php 
				echo $_SESSION['id'];
				?>.v2.jpg'/></a></div>
	<div class="ui-block-a"><a href="saveimage3.php" rel="external"><img width="100%" src='images/<?php 
				echo $_SESSION['id'];
				?>.v3.jpg'/></a></div>
	<div class="ui-block-b" rel="external"><a href="saveimage4.php"><img width="100%" src='images/<?php 
				echo $_SESSION['id'];
				?>.v4.jpg'/></a></div>
</div>

</div>
</div>
</body>
</html>