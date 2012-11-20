<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 


<?php

include "phmagick.php";
//version1

 $p = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v1bottom.jpg');
 $p->darken(30);
 $p->contrast();
 
 $p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v1top.jpg');
 $p->rotate(180);
 $p->smooth();
 $p->contrast();
 $p->contrast();
 $phMagick = &new phMagick('upload/'.$_SESSION['id'].'.v1bottom.jpg', 'images/'.$_SESSION['id'].'.v1.jpg');
 $phMagick->watermark('upload/'.$_SESSION['id'].'.v1top.jpg', phMagickGravity::Center, 60);

//version2
	include_once("imageprocess.php");
 $p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v2bottom.jpg');
 $p->reflection(60,50);
 $p = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v2top.jpg');
 $p->sepia();
 $p->saturate();
 $p->saturate();
 $phMagick = &new phMagick('upload/'.$_SESSION['id'].'.v2bottom.jpg', 'images/'.$_SESSION['id'].'.v2.jpg');
 $phMagick->watermark('upload/'.$_SESSION['id'].'.v2top.jpg', phMagickGravity::Center, 30);
 
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
$q->invertColors();

$r = new phmagick('upload/'.$_SESSION['id'].'.v3bottom.jpg','images/'.$_SESSION['id'].'.v3.jpg');
$r->watermark('upload/'.$_SESSION['id'].'.v3top.jpg', phMagickGravity::Center, 70); 

//version4
$p = new phmagick('upload/'.$_SESSION['id'].'.image1.jpg', 'upload/'.$_SESSION['id'].'.v4bottom.jpg');	
$p->contrast();
$p->saturate();

$q = new phmagick('upload/'.$_SESSION['id'].'.image2.jpg', 'upload/'.$_SESSION['id'].'.v4top.jpg');
$q->rotate(45);
$q->toGreyScale();

$r = new phmagick('upload/'.$_SESSION['id'].'.v4bottom.jpg','images/'.$_SESSION['id'].'.v4.jpg');
$r->watermark('upload/'.$_SESSION['id'].'.v4top.jpg', phMagickGravity::Center, 70); 



?>

<html> 
<head> 
	<title>Mashup</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<div data-role="page>
<body> 
	<div data-role="header">
				<a href="photopreview.php" data-role="button" data-inline="true">Back</a>
				<h1>Mashups</h1>

	</div><!-- /header -->

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