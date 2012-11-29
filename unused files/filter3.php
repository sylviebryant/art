<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Filter3</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
			<a href="mashup.php" data-role="button" data-inline="true">Back</a>

		<h1>Filter</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
		<p>This page lets you select your own filter</p>		
	</div><!-- /content -->

<img width="100%" src='images/mashup3.jpg'/>
<a href="final-edit.php" data-role="button" data-inline="true" float="right" data-align="right">Confirm</a>
	
</div><!-- /page -->

</body>
</html>