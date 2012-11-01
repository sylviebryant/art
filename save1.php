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
require_once("dbconnect.inc.php");  //for database connection                   
    $db_name="gallery";                                     
     $tbl_name="product";
     $db_selected=mysql_select_db("$db_name")or die("cannot select DB");
    // Connect to server and select databse.
    // username and password sent from form 
    $myusername=$_POST['myusername']; 
    $myproduct=$_POST['product'];
    $filename=$_POST['uploadimage'];

$imgData = file_get_contents($filename);
    $size = getimagesize($filename);
    $sql = "INSERT INTO product
    (productname, image_id , image_type ,image, image_size, image_name,productdesc)
    VALUES
    ('$myusername','11', '{$size['mime']}', '{$imgData}', '{$size[3]}', 
     '{$_FILES['userfile']['name']}','$productdesc')";
    $result=mysql_query($sql) or die("error in uploading/*");
?>
</body>
</html>