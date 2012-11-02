
<!DOCTYPE html> 
<html> 
<head> 
	<title>Filter</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 
<?php
include("config2.php");
?>

<div data-role="page">

	<div data-role="header">
			<a href="mashup.php" data-role="button" data-inline="true">Back</a>

		<h1>Save</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
<FORM action="save.php" rel="external" method="post">
                 <div style="font:bold 10px arial,serif;" >Title</div>
                 <input type="text" name="title" maxlength="30" /><br />
                 <img src="images/mashup4.jpg" width="100%"/>
 <input type="hidden" name="urltoimage" value="images/mashup4.jpg" /><br />
                 <input id="submit" type="submit" value="submit" /><br />
                 </form>	</div><!-- /content -->

	
</div><!-- /page -->

</body>
</html>