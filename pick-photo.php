<!DOCTYPE html> 
<html> 
<head> 
	<title>Pick Photos</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<div data-role="page>
<body> 
	<div data-role="header">
		<h1>Pick Photos</h1>
		<a href="index.php" data-role="button" data-inline="true">Back</a>
	</div><!-- /header -->
<div data-role="controlgroup" data-type="horizontal">
<a href="takephoto.php" data-role="button">Pick Photo 1</a>
<a href="takephoto.php" data-role="button">Pick Photo 2</a>
</div>
<a href="mashup.php" data-role="button">Generate</a>
</div>
</body>
</html>