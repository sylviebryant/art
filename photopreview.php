<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>photopreview</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/scriptchg1.js"></script>
	<script src="js/scriptchg2.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<a href = "index.php" data-role = "button" data-theme = "a"> Home </a>
		<h1>Preview</h1>
		<a href = "mashup.php" data-role = "button" data-theme="b">Mash 'em Up!</a>
	</div><!-- /header -->

	<div data-role="content">	
	<div class="ui-grid-a" >

	<div class = "ui-block-a"> <form id="upload_form1" enctype="multipart/form-data" method="post" >
	<div class = "ui-block-a" style="position: absolute; z-index:0"><input type = "image" class = "photo1" img width="100%" src= "upload/<?php 
				echo $_SESSION['id'];
				?>.image1.jpg"/></div>
	<div class = "click1" style="position: absolute; z-index:1; left: 4.5%; top: 14%; font-size: 15px; opacity: 0.8; color: red;"><img src= "upload/change.png" width = "30%"></div>
	<input type="file" class = "image1" accept="image/*" capture="camera" name="image_file" id="image_file1" style="visibility:hidden;position:absolute;top:0;left:0" onchange="image1Selected();" />
	<div class = "upload1"><input type ="submit" name ="upload" value="Upload" width = "50%" style="position:absolute; top = 180px;" onclick="startUploading1();"/>
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
			
                    </div>
                   

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
					</form>
					</div>
	
	<div class = "ui-block-b"> <form id="upload_form2" enctype="multipart/form-data" method="post" >
	<div class = "ui-block-b" style="position: absolute; z-index:0"><input type = "image" class = "photo2" img width="100%" src= "upload/<?php 
				echo $_SESSION['id'];
				?>.image2.jpg"/></div>
	<div class = "click2" style="position: absolute; z-index:1; left: 50%; top: 14%; font-size: 15px; opacity: 0.8; color: red;" ><img src= "upload/change.png" width = "30%"></div>		
	<input type="file" class = "image2" accept="image/*" capture="camera" name="image_file" id="image_file2" style="visibility:hidden;position:absolute;top:0;left:0" onchange="image2Selected();" />
				
    <div class = "upload2"><input type ="button" id ="upload2" value="Upload" onclick="startUploading2()"/></div>
	
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
					
	
	</div>
		</div><!-- /content -->		
		
	

</div>

</div><!-- /page -->

</body>
</html>