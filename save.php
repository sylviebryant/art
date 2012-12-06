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
	<link href="css/sub.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
 
<body>
<div data-role="page">

<div data-role="header" data-theme = "c">
		<h1>Photo Saved!</h1>
		<a data-rel="back" data-theme = "c" data-icon = "back" data-role="button" data-inline="true">Back</a>
</div><!-- /header -->

<div class="ui-grid-a">
	<div class="ui-block-a"><a href = "index.php"><img src = "buttons/HomeButton.png" width = "100%"></a></div>
	<div class="ui-block-b"><a href = "facebook.php"><img src = "buttons/ShareButton.png" width = "100%"></a></div>
</div><!-- /grid-a -->

<div data-role="content">

<?php
include("config2.php");

$result = mysql_query("INSERT INTO `c_cs147_afauci`.`gallery` (`title`, `username`, `image`) VALUES ('$_POST[title]', '$_SESSION[id]', '$_POST[urltoimage]');");

echo "<tr><td><h2>".$_POST[title]."</h2>";
echo "<td><img width='280' class='pretty' src='".$_POST[urltoimage]."' /></td></td>"; 

?>


 </div>
</div>


</body>
</html>