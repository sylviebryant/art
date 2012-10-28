<!DOCTYPE html> 
<html> 
<head> 
	<title>Filter</title> 
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

	<div class="photo">
	<img width='300' height='300' class='pretty' src='photo1.png' />
	<div class="coda">Edit options go here</div>

<a href="final-edit.php" data-role="button" data-inline="true" float="right" data-align="right">Confirm</a>
	
</div><!-- /page -->

</body>
</html>