<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
</style>
<head> 
	<title>Preview</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<div data-role="page>
<body> 
	<div data-role="header">
		<h1>Preview</h1>
		<a href="index.php" data-role="button" data-inline="true">Back</a>
	</div><!-- /header -->
<div data-role="content">
	<img src='images/image1.JPG' width="600px" max-width="100%"/>
	<img src='images/image2.JPG' width="600px" max-width="100%" />
</div>	
<a href="mashup.php" data-role="button">Generate</a>
</body>
</div>
</html>