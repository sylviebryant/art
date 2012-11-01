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
include("config.php");

$username = mysql_real_escape_string($_POST['username']);
$realpassword = mysql_real_escape_string($_POST['password']);
$password = md5(mysql_real_escape_string($_POST['password']));

    $result   = mysql_query("select * from login where username='$username'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {
			$username = $row; 
        }
			echo "<p>Username already exists. Please go back and choose another.</p>";
	} else {
			echo "<p>You have successfully created a new login. Please go back and login</p>";
			echo "<p>Username is: ".$username."</p>";
			echo "<p>Password: ".$realpassword."</p>";		
			echo "<p>Encoded Password: ".$password."</p>";		
			$query2 = "insert into login values ('$username', '$password')";
			$result2 = mysql_query($query2);
			}
?>
</body>
</html>