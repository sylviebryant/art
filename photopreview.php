<!DOCTYPE html> 
<html> 
<head> 
	<title>photopreview</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/script.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Preview</h1>
	</div><!-- /header -->

	<div data-role="content">	
	<p> Click on the photo you want to change</p>
	<div style="width:830px; background-color:white; height:120px;">
		<div style="width: 2000px; height: 90px;">
			<a href="takephoto1.html" data-role="image" data-inline="true" rel="external"><img src="upload/<?php 
				session_start();
				if(!isset($_SESSION['id'])){
				header("Location: index.php");
				};
				$a = $_SESSION['id'];
				echo $a;
				?>		
				.image1.jpg" width="120" height="100" />
			<a href="takephoto2.html" data-role="image" data-inline="true" rel="external"><img src="upload/<?php 
				session_start();
				if(!isset($_SESSION['id'])){
				header("Location: index.php");
				};
				$a = $_SESSION['id'];
				echo $a;
				?>		
				.image2.jpg" width="120" height="100" />	
		</div>
	</div>
	<a href = "mashup.php" data-role = "button" data-theme="a">Generate</a>
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>