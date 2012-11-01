<!DOCTYPE html> 
<html> 
<head> 
	<title>My Gallery</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="index.php" data-role="button" data-inline="true">Back</a>
		<h1>Gallery</h1>
	</div><!-- /header -->

	<div data-role="content">	

		<?php
			include("config.php");
			$query = "SELECT * FROM gallery where 1";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr><td><h2>".$row["title"]."</h2>";
			} 
?>

</div>	
	</div><!-- /content -->
	
	

</div><!-- /page -->

</body>
</html>