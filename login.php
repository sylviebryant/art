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
	<title>Login</title>
	<!-- 
Ours:

From week5 VoteCaster:	
	<title>VoteCasterFail</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="purple">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
	
-->

<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="purple">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />	

	<link rel="apple-touch-icon" href="upload/Mash-Photato-Icon.png" />
	<link rel="apple-touch-startup-image" href="upload/WelcomeScreen.png">
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

</head> 

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Login</h1>
	</div><!-- /header -->
	
	<div class = "click1" style="position: absolute; z-index:0; opacity:0.45">
		<img class="source-image" img id="background-img" class="bg" alt="" src="upload/TiledPotatoBkgdTransparent.png">
</body>
		</div>
			
	<div class = "click2" style="position: absolute; z-index:1; left:7%">
	<div data-role="content">		
			
		<p align="center"><img src = "upload/Mash-Photato-Icon.png" height="57" width="57" img style="float:middle"></p> 
		<h3 align="center">Welcome to Mash Photato</h3>

		<!-- <p>Login to Mash Photato, the only app that takes your two photos to create an artful mashup!</p>	-->	
	</div><!-- /content -->	

	<a href="newlogin.php" data-role="button" data-mini="true">New User? Create an Account</a>


<form action="submit.php" method="post" id="login">						
	<!-- <h2><span>Login</span></h2>  -->
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
</div>

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