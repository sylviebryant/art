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

		
	<div class = "test"> <p> this is<?php 
				echo $_SESSION['url'];
				?> </p> </div>
				
				
		<?php
			include("config2.php");
			$id = $_SESSION['id'];
			$query = "SELECT * FROM gallery WHERE username = '$id'";
		$result = mysql_query($query);
			$a = 1;
        while ($row = mysql_fetch_assoc($result)) {
			$_SESSION['index'] = $a;
			$item = (string)$a;
        	echo "<tr><h4>".$row["title"]."</h4></tr>";
			echo "<a href='#$item' data-rel='popup'><input type = 'image' img width='100' style='max-width:95%;border:6px double #545565;' class='pretty' src='".$row["image"]."' /></a>"; 
			$_SESSION['item'] = $row["image"];
			
			echo "<div data-role= 'popup' id='$item'><input type = 'image' img width='280' style='max-width:95%;border:6px double #545565;' class='pretty' src= '".$row["image"]."' /></div>";
			//print ($row["image"]);
			//echo "<div class  = 'buttons'><a href = 'form.php' data-role='button' data-rel='dialog' data-inline='true'>Delete</a><a href='facebook.php'  data-rel='dialog' data-role='button' data-inline='true' data-theme= 'b' >Share</a></a></div>";
			//if (isset($_POST['submit']))
			//{
				//print("Hello World");
				//$file = $_SESSION['url'];
				//if(is_file($file)) unlink($file);
			//}
			
			//<img style="max-width:95%;border:6px inset #545565;" src="http://www.quackit.com/pix/milford_sound/milford_sound_t.jpg" alt="Milford Sound in New Zealand" />
			
			
			//function deleteImage()
			//{
				//$file = $_SESSION['url'];
				//if(is_file($file)) unlink('$row["image"]');
			//}
			//$displayImg = $row["image"];
			//echo "$dispayImg";
			++$a;
        }

?>



</div>	
	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>