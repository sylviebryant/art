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

<div data-role="page">
	<div data-role="header">
		<a href="mashup.php"  data-role="button" data-inline="true">Back</a>
		<h1>Almost done!</h1>
	</div><!-- /header -->

	<div data-role="content">	
		</div><!-- /content -->
<img width="100%" src='images/mashup3.jpg'/>
	<a href="saved3.php" data-role="button">Save</a>
	<!---a href="printpage.php" data-role="button">Print</a!--->
	<a href="facebook3.html" data-role="button" rel = "external">Share on Facebook</a>
	<a href="index.php" data-role="button" data-inline="true">Done</a>

	

	
	
</div><!-- /page -->

</body>
</html>