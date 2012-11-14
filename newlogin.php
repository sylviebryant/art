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
	<title>New Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body>

<div data-role="page">
	<div data-role="header">
		<a href="login.php" data-role="button" data-inline="true">Back</a>
		<h1>New Account</h1>
	</div><!-- /header -->
	
<!--	<div data-role="content">	
		<p>Welcome to Mash Photato, the only app that takes your two photos to create an artful mashup!</p>		
	</div>  -->

<form action="submit2.php" method="post" id="newlogin">						
	<h2><span>Create New Account</span></h2>
	<p><label>Username</label>
	<input type="text" id="username" name="username" />
	</p>
	<p><label>Password</label>
	<input type="password" id="password" name="password" /></p>
	<input type="submit" value="Login" />				
</form>	

<a href="login.php" data-role="button" data-mini="true">Already have an Account? Sign in here. </a>

</div><!-- /page -->
</body>
  </html>