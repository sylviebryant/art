<!DOCTYPE html> 
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
		<h1>Mashups</h1>
		<a href="pick-photo.php" data-role="button" data-inline="true">Back</a>
	</div><!-- /header -->

<p>This page generates the mashup</p>
<p>You will later be able to select a photo, but now just press confirm to move on</p>
<p>Also, regenerate is not present since it doesn't work</p>
<p><img src='photo1.png' width="200" height="200" />
<img src='light-dots.png' width="200" height="200"/>
<img src='water.png' width="200" height="200" /></p>
<p><a href="filter.php" data-role="button" data-inline="true" data-align="right">Confirm</a></p>
</div>

</body>
</html>