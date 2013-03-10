<?php

#########################################################################
# file: index.php
# version: 1.0
# author: c.foster
# date: 03.09.13
# functionality: assignment 3 for WEBLAMP442
#########################################################################
     
     // include the Facebook php sdk
     require_once('Vendors/facebook/php-sdk/src/facebook.php');

     // pull in the the Facebook app config settings
     include ('Includes/fbappconfig.inc');

     // include the FacebookUser class
     include ('Src/FacebookFriend.php');

     // include the DBAL
     include ('Src/Db/PdoDbal.php');

?>

<html>
<head></head>
<body>

<h3>Assigment 3 - Consume FB Graph API and display Facebook user id & name</h3>

<?php
     // initiate a Facebook object from the PHP SKD using the FB app config
     $facebook = new Facebook($config);

     // get the user id from the Facebook, this will be 0 if not logged in
     $user_id = $facebook->getUser();

     // make sure a user is logged in
     if($user_id) {

	  // We have a user ID, so probably a logged in user.
	  // If not, we'll get an exception, which we handle below.
	  try {

	       $user_profile = $facebook->api('/me','GET');

	  } catch(FacebookApiException $e) {

	       // If the user is logged out, you can have a 
	       // user ID even though the access token is invalid.
	       // In this case, we'll get an exception, so we'll
	       // just ask the user to login again here.
	       $login_url = $facebook->getLoginUrl(); 
	       echo 'Please <a href="' . $login_url . '">login.</a>';
	       error_log($e->getType());
	       error_log($e->getMessage());
	  } 
  
     } else {

	  // No user, print a link for the user to login
	  $login_url = $facebook->getLoginUrl();
	  echo 'Please <a href="' . $login_url . '">login.</a>';
     }

     // get the user profile from Facebook Graph API
     $user_profile = $facebook->api('/me','GET');
     $user_id = $facebook->getUser();
     echo "<p>Name: " . $user_profile['name'] . "</p>";
     echo "<p>Facebook User Id: " . $user_id . "</p>";

     // get the friends of the logged in user
     $friends = $facebook->api('/me/friends');

     // connect to local database
     $conn = new Db\PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');
     $conn->connect();

     // store friends into local database
     foreach ($friends['data'] as $friends) {
	  echo $friends['name'].'<br/>';
//	  $friendEntity = new FacebookFriend();
//	  $conn->insert($friendEntity);
	  $conn->insert($friends['name'], $friends['id']); // having issues with ORM on this hardcoding this
     }

     


     
?>


</body>
</html>

