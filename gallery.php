<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>My Gallery</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link href="css/sub.css" rel="stylesheet" type="text/css" />
	<script src="js/script.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="index.php" data-role="button" data-inline="true">Back</a>
		<h1>Gallery</h1>
	</div><!-- /header -->

	<div data-role="content">	
				
				
		<?php
			include("config2.php");
			$id = $_SESSION['id'];
			$query = "SELECT * FROM gallery WHERE username = '$id'";
		$result = mysql_query($query);
			$a = 1;
        while ($row = mysql_fetch_assoc($result)) {
			$_SESSION['index'] = $a;
			$item = (string)$a;
			$ditem  = "d".$item;
			$fitem = "f".$item;
        	echo "<tr><h4>".$row["title"]."</h4></tr>";
			echo "<a href='#$item' data-rel='popup'><input type = 'image' img width='100' style='max-width:95%;border:6px double #545565;' class='pretty' src='".$row["image"]."' /></a>"; 
			$_SESSION['item'] = $row["image"];
			echo " <div class  = 'buttons'>";
			echo "<a href='#$ditem' data-rel= 'popup' data-inline= 'true'><img src = 'delete_icon.jpg' width = '50' /></a>";
			//echo  "<a class = 'facebook' id = '".$row["image"]."' data-rel= 'dialog' data-inline= 'true'><img src = 'facebook_icon.jpg' width = '50' /></a></div>";		
			echo "<div data-role= 'popup' id='$item'><input type = 'image' img width='280' style='max-width:95%;border:6px double #545565;' class='pretty' src= '".$row["image"]."' /></div>";
			echo "<div data-role= 'popup' id='$ditem'><input type = 'image' img width='280' style='max-width:95%;border:6px double #545565;' class='pretty' src= '".$row["image"]."' /><p> Are You SURE you want to delete the photo? </p><a href ='gallery.php' data-role = 'button' >Cancel</a><a data-role = 'button' data-theme = 'b' class = 'delete' id = '".$row["image"]."' >Delete</a></div>";
			
			++$a;
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
				window.location = "gallery.php";
			});
			});
		
  
		
					</script>





	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>