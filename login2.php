<!DOCTYPE html> 
<html> 

<!--
<script type="text/javascript">
  $(".chzn-select").chosen();
  </script> 

<script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
</script>

<script type="text/javascript">	
		$("#newlogin").submit(function(){
			event.preventDefault();
			$.post("submit2.php", $("#newlogin").serialize(), function(data) {
				$("#result2").html(data);
			});
		});
</script>

<div id="result"></div>
<div id="result2"></div>
-->
  
<head>
<script src="//cdn.optimizely.com/js/141071580.js"></script>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Login</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
		<h2><span>Mash Photato Photo goes here</span></h2>
		<!-- <p>Login to Mash Photato, the only app that takes your two photos to create an artful mashup!</p>	-->	
	</div><!-- /content -->	

<p>Welcome to Mash Photato! Don't have an account? Select Create an Account below!</p>

<form action="submit.php" method="post" id="login">						
	<!-- <h2><span>Login</span></h2>  -->
	<p>Already mashed? Enter your username and password below.</p>
	<p>Want to try it out? Choose Create Account to sign up.<p>
	<div data-role="fieldcontain">
	  <label for="username">Username:</label>
	  <input type="text" id="username" name="username" data-mini="true"/>
	</div>	
	
	<div data-role="fieldcontain">
	  	<label for="password">Password:</label>
		<input type="password" id="password" name="password" data-mini="true"/>
	</div>	
		
	<input type="submit" value="Login" />				
</form>	
	<a href="newlogin.php" data-role="button" data-mini="true">Create Account</a>


<!--

    <label for="name">Username: </label>
    <input type="text" name="username" id="username" />
-->
<!--
<form action="submit2.php" method="post" id="newlogin">					
	<h2><span>Create New Login</span></h2>
	<p><label>Username</label>
	<input type="text" id="username" name="username" />
	</p>								
	<p><label>Password</label>
	<input type="password" id="password" name="password" /></p>					
	<input type="submit" value="Login" />
</form>	
	-->
	
<!--
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
-->

</div><!-- /page -->
</body>
  </html>