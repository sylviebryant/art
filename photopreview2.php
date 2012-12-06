<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<script src="//cdn.optimizely.com/js/139610984.js"></script>
	<title>photopreview</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" /> 
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/scriptchg1.js"></script>
	<script src="js/scriptchg2.js"></script>

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

	<div data-role="header">
		<a href = "index.php" data-role = "button" data-theme = "a"> Home </a>
		<h1>Preview</h1>

	</div><!-- /header -->
	
	<input type = "image" img src = "buttons/MashEmUpButton.png" width = "50%"/>
		<!--<div class = "mashemupbutton" style="position: relative; z-index:1;" > <a href="mashup.php" data-role="button" data-mini="true"> <img src = "upload/Mashemup2.png" width ="50%"> </a></div>-->

	<div data-role="content">	

	<div><form id="upload_form1" enctype="multipart/form-data" method="post" >
	<div class = "click1" style="position: absolute; z-index:0"><input type = "image" img width="100%" src= "upload/<?php 
				echo $_SESSION['id'];
				?>.image1.jpg"/></div>
	<div class = "click1" style="position: static; z-index:1; left: 4.5%; top: 14%; opacity: 0.8;" ><img src= "upload/change.png" width = "25%"></div>
	<input type="file" class = "image1" accept="image/*" capture="camera" name="image_file" id="image_file1" style="visibility:hidden;position:absolute;top:0;left:0" onchange="image1Selected();" />
	<div class = "upload1" style="position: absolute; top: 12%; left:70%; "><input type ="submit" name ="upload" value = "Upload"  width = "50%"  onclick="startUploading1();"/></div>
		<script>
						$(".click1").click(function(e) {
						
							$('input[class="image1"]').click()
							
						})				
		
					   $(".upload1").hide();
					   $(document).ready(
					function(){				
					$(".image1").change(
					function(){
					if ($(this).val()){
						$(".upload1").show();
					}
					else {
						$(".upload1").hide();
					}
					});
					});
					   </script>
			
       
                   

                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error"></div>
                    <div id="error2"></div>
                    <div id="abort"></div>
                    <div id="warnsize"></div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
					</form></div>
					
					
	<div><form id="upload_form2" enctype="multipart/form-data" method="post" >
	<div class = "click2" style="position: absolute; top: 75%; z-index:0"><input type = "image" class = "photo2" img width="100%" src= "upload/<?php 
				echo $_SESSION['id'];
				?>.image2.jpg"/></div>
	<div class = "click2" style="position: absolute; z-index:1; left: 4.5%; top: 75%; font-size: 15px; opacity: 0.8; color: red;" ><img src= "upload/change.png" width = "50%"></div>		
	<input type="file" class = "image2" accept="image/*" capture="camera" name="image_file" id="image_file2" style="visibility:hidden;position:absolute;top:0;left:0" onchange="image2Selected();" />
				
    <div class = "upload2"style="position: absolute; top: 73%; left:70%; "><input type ="button" id ="upload2" value="Upload" width="50%" onclick="startUploading2()"/></div>
	
					   <script>
								 
						$(".click2").click(function(e) {
						
							$('input[class="image2"]').click()
							
						})	
						
						$(".upload2").hide();
					   $(document).ready(
					function(){
					
			
					$(".image2").change(
					function(){
					if ($(this).val()){
						$(".upload2").show();
					}
					else {
						$(".upload2").hide();
					}
					});
					});
					   </script>
			
                  
                  

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
					</form></div>
					
	
	
		</div><!-- /content -->		
		
	

</div>

</div><!-- /page -->

</body>
</html>