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
	
	<style media="screen" type="text/css">

	.ui-page
	{
   background: transparent url(upload/TiledPotatoBkgdTransparent.png) repeat center center;
	}

	</style>
</head> 
<body>

<div data-role="page">
	<div data-role="header" data-theme = "c">
		<a href="mashup1.php" data-role="button" data-icon = "back" data-inline="true" data-theme = "c">Back</a>
		<h1>Save</h1>
	</div><!-- /header -->

	<div data-role="content">	
	
		<FORM action="save.php" rel="external" method="post">
								 
				 <div data-role="fieldcontain" class="ui-hide-label">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="" maxlength="30" placeholder="Please give your mashup a name:"/>
</div>
<?php 
$date = (string)strtotime("now");
$_SESSION['date'] = $date;
copy("images/$_SESSION[id].v3.jpg", "images/$_SESSION[id].$date.jpg");

//save it as final image
//copy("images/$_SESSION[id].v3.jpg", "images/$_SESSION[id].final.jpg");



?>
<input type="hidden" name="urltoimage" value="images/<?php
echo $_SESSION['id'];?>.<?php echo $date;?>.jpg" />

                 <input id="submit" type="submit" value="Save"/><br />
                 </form>
<img width="90%" src='images/<?php 
				echo $_SESSION['id'];
				?>.v3.jpg' />
</div><!-- /content -->
</div><!-- /page -->

</body>
</html>