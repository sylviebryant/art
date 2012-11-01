<!DOCTYPE html> 
<html> 
<head> 
	<title>Login Page</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
 
<body>

<div data-role="header">
		<h1></h1>
		<a href="login.php" data-role="button" data-inline="true">Back</a>
</div><!-- /header -->

<?php
include("config2.php");
$result   = mysql_query("INSERT INTO `c_cs147_afauci`.`gallery` (`title` ,`username` ,`image`)
VALUES ('hi',  'me',  'images/mashup1.jpg');");
?>
</body>
</html>