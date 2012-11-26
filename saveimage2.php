<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 

<html> 
<head> 
	<title>Save & Share page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body>

<div data-role="page">
	<div deleteImages() </div>
	<div data-role="header">
		<a href="mashup.php" data-role="button" data-inline="true">Back</a>
		<h1>Save</h1>
	</div><!-- /header -->

	<div data-role="content">	
	</div><!-- /content -->
	<FORM action="save.php" rel="external" method="post">
                 <div style="font:bold 10px arial,serif;" >Title</div>
                 <input type="text" name="title" maxlength="30" />
<?php 
$date = (string)strtotime("now");
copy("images/$_SESSION[id].v2.jpg", "images/$_SESSION[id].$date.jpg")
?>
<input type="hidden" name="urltoimage" value="images/<?php
echo $_SESSION[id];?>
.
<?php echo $date;?>
.jpg" />

                 <input id="submit" type="submit" value="Save"/><br />
                 </form>
<img width="100%" src='images/<?php
		echo $_SESSION[id]?>.v2.jpg' />
</div><!-- /page -->

</body>
</html>