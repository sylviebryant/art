<?php
session_start();
include("config.php");

$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

if (!isset($username) || !isset($password)) {
    header("Location: sorry.php");   
}
elseif (empty($username) || empty($password)) {
   header("Location: sorry.php");

} else {
    $result   = mysql_query("select * from login where username='$username' AND password='$password'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {
            $_SESSION['id'] = $row['username'];
        }
        header("Location: index.php");
    } else {
        header("Location: sorry.php");
    }
}
?> 
<!-- <!DOCTYPE html> 
<html> 

<head> 
	<title>Login Page</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>

<body>
</body>
 -->

