<?php
session_start();
include("config.php");

$username = mysql_real_escape_string($_POST['username']);
$realpassword = mysql_real_escape_string($_POST['password']);
$password = md5(mysql_real_escape_string($_POST['password']));

  <!--  if ($username == NULL || $realpassword == NULL) {
      	 header("Location: sorry.php");
       }   -->
       
    if (!isset($username) || !isset($realpassword)) {
    header("Location: sorry.php");   
	}
	elseif (empty($username) || empty($realpassword)) {
   header("Location: sorry.php"); 

    $result   = mysql_query("select * from login where username='$username'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {
			$username = $row; 
			header("Location: existingusername.php");
        } 

	} else {
			$query2 = "insert into login values ('$username', '$password')";
			$result2 = mysql_query($query2);
		    $_SESSION['id'] = $username;
		   	header("Location: index.php");
		//	echo "<p>You have successfully created a new login. Please go back and login</p>";
		//	echo "<p>Username is: ".$username."</p>";
		//	echo "<p>Password: ".$realpassword."</p>";		
		//	echo "<p>Encoded Password: ".$password."</p>";		
			}
?>