<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: login.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head>
	<script src="//cdn.optimizely.com/js/139610984.js"></script>
	<title>Mash Photato</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36373072-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head> 
<body>

<div data-role="page">

<style>
  .ui-page { background-image:url('upload/pyramid_background_black3.png'); background-opacity:0.45}
</style>

<!--	<div data-role="header" data-position="inline" vertical-align="middle"> -->
	

		<a href="logout.php" data-role="button" data-inline="true" data-mini="true" data-theme="a">Log out</a>
	
<!--	<div class="ui-bar">  --> 

	
	 <div align = "center">
		<!-- <h1 align="middle">Mash Photato</h1> --> 
		<img src = "upload/Mash-Photato-Icon.png" height="60" width="60" img style="float:middle" align="middle"/>
</div>
	
	<!-- <span class="ui-title"  -->
<!--	</div>  /ui-bar-->
<!--	</div>   /header -->
	
	<div data-role="content">
	
	<font color="#FFFFFF">
<?php
	echo "<p><b> Hi ".$_SESSION['id'].",</b></p>";
?>
</font>

		<p><b><font color="#FFFFFF">Welcome to Mash Photato, the only app that takes your two photos to create an artful mashup!</font></b></p>		
		<!-- <div class="image"><img src ='upload/MashupExample.png' width="100%" /></div> -->

	 <a href="takephoto1.php" data-role="button" data-theme="b">Create</a> 
	 <a href="gallery.php" data-role="button">Gallery</a> 
		<div class="image"><img src ='upload/MashupExampleVertical.png' width="100%" /></div>

	</div><!-- /content -->

	<!--
	<div data-role="navbar">
	<ul>
		<li><a href="takephoto1.php" rel="external" class="ui-btn-active ui-state-persist">Create</a></li>
		<li><a href="gallery.php">Gallery</a></li>
	</ul>
	-->
	
	<?php 
					
			//$file1 = "upload/".$_SESSION['id'].".image1.jpg";
			//$file2 = "upload/".$_SESSION['id'].".image2.jpg";
			//if(is_file($file1)) @unlink($file1);
			//if(is_file($file2)) @unlink($file2);
			
			
			
	?>

</div><!-- /navbar -->
	
</div><!-- /page -->
</body>
</html>