<form action="submit" method="post" id="login">						
	<h2><span>Login</span></h2>
	<p><label>Username</label>
	<input type="text" id="username" name="username" />
	</p>
	<p><label>Password</label>
	<input type="password" id="password" name="password" /></p>
	<input type="submit" value="Login" />				
</form>	

<form action="submit2" method="post" id="login">					
	<h2><span>Create New Login</span></h2>
	<p><label>Username</label>
	<input type="text" id="username" name="username" />
	</p>								
	<p><label>Password</label>
	<input type="password" id="password" name="password" /></p>					
	<input type="submit" value="Login" />
</form>	


<h2>Data from the database</h2>
<table border="1">
<?php
	include("config.php");
	$query2 = sprintf("SELECT * FROM login");
	$result2 = mysql_query($query2);
	$count = 0;
	while ($row = mysql_fetch_assoc($result2)) {
		$count++;
		echo "<tr><td>".$count."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "<td>".$row["password"]."</td></tr>";
	}
	
?>
	