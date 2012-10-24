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
		<h1>Mash Photato</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
		<p>Welcome to Mash Photato, the only app that takes your two photos to create an artful mashup!</p>		
	</div><!-- /content -->
	
	<div data-role="navbar">
	<ul>
		<li><a href="a.html" class="ui-btn-active ui-state-persist">Create</a></li>
		<li><a href="gallery.php">Gallery</a></li>
	</ul>
</div><!-- /navbar -->
	
	
	<div class="banner"></div>
<!--	<?php
		include("menu.php");
	?>
-->		
	<div class="box box1">
	<a href="pick.php" data-role="button">Create</a>
</div>
	
</div><!-- /page -->

</body>
</html>