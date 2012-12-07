<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>UploadPhoto</title>
        <link rel="apple-touch-icon" href="appicon.png" />
	    <link rel="apple-touch-startup-image" href="startup.png">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link href="css/sub.css" rel="stylesheet" type="text/css" />
        <script src="js/script2.js"></script>		
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
  
  <div data-role="header" data-theme = "c">
	<a href = "takephoto1.php" data-role = "button" data-theme = "c" data-icon = "back" data-inline = "true" />Back</a>
	<h1></h1>
	</div>
	
	<div class = "subdiv"></div>
	<div class = "content">
        <div class="container">
            
            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post">
				<div class="ui-grid-a" >
				<div class="ui-block-a" ><img src ="upload/<?php 
				echo $_SESSION['id'];
				?>.image1.jpg"  width="100%" /></div>
				<div class="ui-block-b"><img src = "upload/Add-Photo-button-2.png" width ="100%" />
				
					<!--<div class = "upload"><input type="submit" value="Upload" onclick="startUploading()" /></div>--></div>
					
                        <input type="file" accept="image/*" capture="camera" name="image_file" id="image_file" style="visibility:hidden;position:absolute;top:0;left:0" onchange="fileSelected();" />
						<script>
						var once = false;
						$(".ui-block-b").click(function(e) {
						e.preventDefault();
						e.stopPropagation();
						if(!once){
							$('input[type="file"]').click()
							once = true;
						}
						})						
					</script>
						<script>

					   $(document).ready(
						function(){
						// $(".upload").hide();
						//$('input:submit').attr('disabled',true);
						//$(".classname")
						$('input:file').change(
						function(){
						if ($(this).val()){
							startUploading();
							//$('input:submit').removeAttr('disabled'); 
							// $(".upload").show();
						}
						else {
						//$(".upload").hide();
						//$('input:submit').attr('disabled',true);
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

                <img id="preview" />
</div>
</div>
    </body>
</html>