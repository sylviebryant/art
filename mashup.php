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
				<a href="photopreview.php" data-role="button" data-inline="true">Back</a>
				<h1>Mashups</h1>

	</div><!-- /header -->

<p>This page generates the mashup</p>
<p>You will later be able to select a photo, but now just press confirm to move on</p>
<p>Also, regenerate is not present since it doesn't work</p>
<div class="ui-grid-a" margin-right="20px">
	<div class="ui-block-a"><img width="100%" src='images/mashup1.jpg'/></div>
	<div class="ui-block-b"><img width="100%" src='images/mashup2.jpg'/></div>
	<div class="ui-block-a"><img width="100%" src='images/mashup3.jpg'/></div>
	<div class="ui-block-b"><img width="100%" src='images/mashup4.jpg'/></div>
</div>

<p>
<p></p>
<p><a href="filter.php" data-role="button" data-inline="true" data-align="right">Confirm</a></p>
</div>

</body>
</html>