<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: login.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head>
	<title>Mash Photato</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="js/script.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

</head> 
<body>

<div data-role="page">

 <div data-role="header" data-theme = "c">
	<input type="button" class = "logout" data-theme = "c" value="Log Out" inline = "true" onclick="window.location = 'logout.php'" />
	</div><!-- /header -->

	



	<div data-role="content">	
	 <div align = "center">
		
		<img src = "buttons/StartMashingButton.png" width="100" img style="float:middle" align="middle"/>
</div>

	


		
		<?php
			include("config2.php");
			$id = $_SESSION['id'];
			$query = "SELECT * FROM gallery WHERE username = '$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		if (!$row)
		{
			echo "<p><b> Hi ".$_SESSION['id'].",</b></p>";
			echo "<div class = 'space'></div>";
			echo "<h3 style='text-align:center;'>Start your journey HERE!</h3>";
			echo "<div class = 'img' style='text-align:center;'><img src = 'arrow.jpg' width = '100' /></div>";
		}
		else {
			echo "<p> Hi ".$_SESSION['id'].", here's your Gallery</p>";
			$a = 1;
			while ($row = mysql_fetch_assoc($result)) {
			$_SESSION['index'] = $a;
			$item = (string)$a;
			$ditem  = "d".$item;
			$fitem = "f".$item;
        	echo "<tr><h4>".$row["title"]."</h4></tr>";
			echo "<a href='#$item' data-rel='popup'><input type = 'image' img width='500' style='max-width:95%;border:6px double #545565;' class='pretty' src='".$row["image"]."' /></a>"; 
			$_SESSION['item'] = $row["image"];
			//echo " <div class  = 'buttons'>";
			echo "<a href='#$ditem' data-rel= 'popup' ><img src = 'delete_icon.jpg' width = '30' align = 'right'/></a>";
			//echo  "<a class = 'facebook' id = '".$row["image"]."' data-rel= 'dialog' data-inline= 'true'><img src = 'facebook_icon.jpg' width = '50' /></a></div>";		
			//echo "<div data-role= 'popup' id='$item'><input type = 'image' img width='280' style='max-width:95%;border:6px double #545565;' class='pretty' src= '".$row["image"]."' /></div>";
			echo "<div data-role= 'popup' id='$ditem'><input type = 'image' img width='280' style='max-width:95%;border:6px double #545565;' class='pretty' src= '".$row["image"]."' /><p> Are You SURE you want to delete the photo? </p><a href ='index.php' data-inline = 'true'  data-icon='back' data-role = 'button' >Cancel</a><a data-role = 'button' data-inline = 'true' data-icon = 'delete' data-theme = 'b' class = 'delete' id = '".$row["image"]."' >Delete</a></div>";
			echo "<div class = 'space'></div>";
			++$a;
        }
		}
?>
		
		<script>
					//put it outside while loop
		$(".delete").click(function() {
			var id = $(this).attr("id");
			$.ajax({
				type: "POST",
				url: "delete.php",
				data: { photoid: id }
				}).done(function( ) {
				window.location = "index.php";
			});
			});
		
  
		
					</script>
					


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