<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Save Page</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
 
<body>
<div data-role="page">

<div data-role="header">
		<h1>Saved</h1>
		<a data-rel="back" data-role="button" data-inline="true">Back</a>
</div><!-- /header -->

<div data-role="body">
<p>You have successfully saved your photo! You can now view it in your gallery from the home page. </p>
<a href="index.php" data-role="button" data-inline="true">Done</a>

<?php
include("config2.php");

$result = mysql_query("INSERT INTO `c_cs147_afauci`.`gallery` (`title`, `username`, `image`) VALUES ('$_POST[title]', '$_SESSION[id]', '$_POST[urltoimage]');");

?>

	<?php 
				foreach(glob("upload/".$_SESSION['id']."*.*") as $file)
				{
					if(is_file($file))
					@unlink($file);
					}
	?>


</div>
</div>

</body>
</html>