<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Save & Share page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 


<?php

 $myFile1 = "upload/image1.jpg";
 unlink($myFile1);
 $myFile2 = "upload/image2.jpg";
 unlink($myFile2);
?>




<div data-role="page">
	<div deleteImages() </div>
	<div data-role="header">
		<a data-ref="back" data-role="button" data-inline="true">Back</a>
		<h1>Almost done!</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>This page saves, prints and shares the painting</p>		
	</div><!-- /content -->

<<<<<<< HEAD
	<a href="saved.php" data-role="button">Save</a>
=======
	<p>This save button will generate pop up message</p>
	<p>As of now "Save" doesn't do anything</p>

	<a href="gallery.php" data-role="button" >Save</a>
>>>>>>> 46da63db357a0f671c80ed146f34244aa7c50f43
	<a href="printpage.php" data-role="button">Print</a>
	<a href="facebook.html" data-role="button" rel = "external">Share on Facebook</a>
	<a href="index.php" data-role="button" data-inline="true">Done</a>


</div><!-- /page -->

</body>
</html>