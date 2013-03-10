<?php

/**
 * Class representing a Facebook User
 * Provides getter and setter methods
 * Provides a method to prompt user to login
 */

class FacebookUser {

     /**
      * Facebook user id
      * @var int
      */
     protected $_facebookUserId;

     /**
      * Facebook user name
      * @var string
      */
     protected $_facebookUserName;

     /**
      * Get the Facebook user id
      */
     public function getFacebookUserId() {
	  return $this->_facebookUserId;
     }

     /**
      * Set the Facebook user id
      */
     public function setFacebookUserId($id) {
	  $this->_facebookUserId = $id;
     }

     /**
      * Get the Facebook user name
      */
     public function getFacebookUserName() {
	  $this->_facebookUserName;
     }

     /**
      * Set the Facebook user name
      */
     public function setFacebookUserName($name) {
	  $this->_facebookUserName = $name;
     }

     /**
      * Method to have user login if not already logged in 
      */
     public function login($user_id) {

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
     }
}
