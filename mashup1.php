<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Mashup</title> 	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link href="css/sub.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 
<div data-role="page">

	<div data-role= "header">
		<a href = "photopreview.php" data-role = "button" data-theme = "a"> Back </a>
		<h1>Mashups</h1>
		<a href = "mashup.php" data-role = "button" data-theme="b" rel = "external" >Remash</a>

	</div><!-- /header -->

	



	<div data-role="content">	
<h3><font color = "blue">Click on your favorite mashup:</font></h3>
<table>
<tr>
<td><a href="saveimage1.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v1.jpg' width = "100%"/></a></td>
<td><a href="saveimage2.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v2.jpg' width = "100%"/></a></td>
</tr>
<tr>
<td><a href="saveimage3.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v3.jpg' width = "100%" /></a></td>
<td><a href="saveimage4.php" rel="external"><img src='images/<?php 
				echo $_SESSION['id'];?>.v4.jpg' width = "100%" /></a></td>
</tr>
</table>

</div>
</div>
</body>
</html>