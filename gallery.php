<!DOCTYPE html> 
<html> 
<head> 
	<title>My Gallery</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="index.php" data-role="button" data-inline="true">Back</a>
		<h1>Gallery</h1>
	</div><!-- /header -->

	<div data-role="content">	

		<?php
			include("config.php");
			$dir = "gallery/*.jpg";
//get the list of all files with .jpg extension in the directory and safe it in an array named $images
$images = glob( $dir );

//extract only the name of the file without the extension and save in an array named $find
foreach( $images as $image ):
    echo "<img src='" . $image . "' />";
endforeach;
?>

</div>	
	</div><!-- /content -->
	
	

</div><!-- /page -->

</body>
</html>