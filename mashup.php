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

<p>Select the photo the mashup that you like best:</p>
<div class="ui-grid-a" margin-right="20px">
	<div class="ui-block-a">
	<a href="final-edit1.php" rel="external">
		<img width="100%" src='images/mashup1.jpg' opacity="20%"/>
		</a></div>
	<div class="ui-block-b">
	<a href="final-edit2.php" rel="external"><img width="100%" src='images/mashup2.jpg'/></a></div>
	<div class="ui-block-a"><a href="final-edit3.php" rel="external"><img width="100%" src='images/mashup3.jpg'/></a></div>
	<div class="ui-block-b" rel="external"><a href="final-edit4.php"><img width="100%" src='images/mashup4.jpg'/></a></div>
</div>

</div>
</div>
</body>
</html>