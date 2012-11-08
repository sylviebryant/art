<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: login.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Mash Photato</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<a href="login.php" data-role="button" data-inline="true">Login as a Different User</a>
		<h1>Mash Photato</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
<?php
	echo "<p>Hi ".$_SESSION['id'].",</p>";
?>
		<p>Welcome to Mash Photato, the only app that takes your two photos to create an artful mashup!</p>		
	</div><!-- /content -->
	
	<div data-role="navbar">
	<ul>
		<li><a href="takephoto1.php" rel="external" class="ui-btn-active ui-state-persist">Create</a></li>
		<li><a href="gallery.php">Gallery</a></li>
	</ul>
</div><!-- /navbar -->
	
</div><!-- /page -->

</body>
</html>