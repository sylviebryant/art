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
		<h1>Almost done!</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>This page saves, prints and shares the painting</p>		
	</div><!-- /content -->

	<p>This save button will generate pop up message</p>
	<p>As of now "Save" doesn't do anything</p>
	<input type="submit" value="Save" />
	<a href="printpage.php" data-role="button">Print</a>
	<a href="share-page.php" data-role="button">Share</a>
	<a href="filter.php" data-role="button" data-inline="true" data-theme="a">Back</a>
	<a href="index.php" data-role="button" data-inline="true">Done</a>


</div><!-- /page -->

</body>
</html>