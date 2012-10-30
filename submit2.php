<style type="text/css">
.blue {
	color:blue;
	font-weight:bold;
}
body {
	font-family:Helvetica;
}
</style>

<body>
<?php
include("config.php");

$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

    $result   = mysql_query("select * from login where username='$username'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {
			$username = $row; 
        }
			echo "<p>Username already exists. Please choose another.</p>";
	} else {
			echo "<p>You have successfully created a new login.</p>";
			echo "<p>Username is: ".$username."</p>";
			echo "<p>Password: ".$password."</p>";		
			$query2 = "insert into login values ('$username', '$password')";
			$result2 = mysql_query($query2);
			}
?>
</body>