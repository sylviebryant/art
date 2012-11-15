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
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="js/script1.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

   </head>

 


<body>


	<div data-role="header">
	<input type="button" class = "back" value="Back" inline = "true" onclick="window.location = 'index.php'" />
	</div>

       
        <div class="container">
            
            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post" >
						<div class="div0" >
						<div class="div1" style="border:2px solid grey; width: 48%; float: left;"><img src ="upload/takephoto1.jpg" width="100%" /></div>
                        <!--<div class = "section1" style="background-color: red; width: 50%; float: left;">  Tap to Choose </div>  --> 
                        <input type="file" accept="image/*" capture="camera" name="image_file" id="image_file" style="visibility:hidden;position:absolute;top:0;left:0" onchange="fileSelected();" />
						<script>
						var once = false;
						$(".div1").click(function(e) {
						e.preventDefault();
						e.stopPropagation();
						if(!once){
							$('input[type="file"]').click()
							once = true;
						}
						})				
						
					</script>
					<div class="div2" style="border:2px solid silver;background-color: white; width: 48%; float: left;"><img src = "upload/takephoto2-grey.jpg" width ="100%" /></div>
					</div>
					
                    <div>
                       <input type ="submit" class "upload" name ="upload" value="Upload" width = "50%" onclick="startUploading()"/>
					   <script>
					   $(document).ready(
					function(){
					$('input:submit').attr('disabled',true);
					$('input:file').change(
					function(){
					if ($(this).val()){
						$('input:submit').removeAttr('disabled'); 
					}
					else {
						$('input:submit').attr('disabled',true);
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
                    <div id="error">You should select valid image files only!</div>
                    <div id="error2">An error occurred while uploading the file</div>
                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
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