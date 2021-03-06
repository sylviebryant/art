<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<html>
<head>
  <title>Facebook Login</title>
  <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <meta property="og:title" content="Hello world" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hello World" />
  <meta property="og:description" content="Hello World!  This is my mobile web sample app." />
  <meta property="og:image" content="http://www.facebookmobileweb.com/hackbook/img/facebook_icon_large.png"/>
</head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

<div data-role="dialog">
<div data-role="header">
		<h1>Share!</h1>
	<a href="index.php" data-role="button" data-inline="true">Home</a>	
	</div><!-- /header -->

<body>

  <div id="fb-root"></div>
  <script>
    (function() {
      var e = document.createElement('script'); e.async = true;
          e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
          document.getElementById('fb-root').appendChild(e);
          }());
  </script>
  
  <script>
    window.fbAsyncInit = function() {
      FB.init({ appId: '297877890324852', 
      status: true, 
      cookie: true,
      xfbml: true,
      oauth: true});
 
      FB.Event.subscribe('auth.statusChange', handleStatusChange);	
    };
  </script>
  
  <script>
   function handleStatusChange(response) {
     document.body.className = response.authResponse ? 'connected' : 'not_connected';
    
     if (response.authResponse) {
       console.log(response);
       updateUserInfo(response);
     }
   }
   </script>
   
   <div id="login">
     <p><button onClick="loginUser();">Login</button></p>
   </div>
  
   
  <script>
    function loginUser() {    
      FB.login(function(response) { }, {scope:'email'});  	
    }
  </script>
  
  <style>
    body.connected #login { display: none; }
    body.connected #logout { display: block; }
    body.not_connected #login { display: block; }
    body.not_connected #logout { display: none; }
  </style>
  
  <div id="user-info"></div>
  <script>
    function updateUserInfo(response) {
      FB.api('/me', function(response) {
        document.getElementById('user-info').innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture">' + response.name;
      });
    }
  </script>


 
  <a href="#" input type = "button" onclick="publishStory();">Publish Photo</a><br>
  <script>
  function publishStory() {
    FB.ui({
      method: 'feed',
      name: 'I just created a painting using Mash Photato!',
      caption: 'This web app is awesome.',
      link: 'http://mashphotato.hciclass.com/art',
      picture: 'http://mashphotato.hciclass.com/art/images/<?php 
				echo $_SESSION['id'];
				?>.<?php echo $_SESSION['date']; ?>.jpg'
				}, 
    function(response) {
      console.log('publishStory response: ', response);
    });
    return false;
  }
  </script>
  
   <div id="logout">
     <div id="user-info"></div>
     <p><button  onClick="FB.logout();">Logout</button></p>
   </div>

  </div>
</body>
</html>