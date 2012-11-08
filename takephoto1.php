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
	<label>  Upload First Photo  </label>
	<input type="button" class = "Skip" value ="Skip" inline = "true" onclick="window.location='takephoto2.php'" <?php if (!file_exists('upload/'.$_SESSION['id'].'.image1.jpg')) echo 'disabled="disabled"' ?> /> 
	</div><!-- /header -->
       
        <div class="container">
            
            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post" action="upload1.php">
                    <div>
                        
                        <div><input type="file" accept="image/*" capture="camera" name="image_file" id="image_file" onchange="fileSelected();" /></div>
                    </div>
                    <div>
                       <input type ="submit" name ="upload" value="Upload" onclick="startUploading()"/>
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