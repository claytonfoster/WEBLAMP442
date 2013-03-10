 
<?php
// load required files
require '../Vendors/Slim/Slim/Slim/Slim.php';
require '../Vendors/RedBeanPHP3_3_7/rb.php';

// register Slim auto-loader
\Slim\Slim::registerAutoloader();

// set up database connection
R::setup('mysql:host=localhost;dbname=weblamp442','root','weblamp442');
R::freeze(true);

// initialize app
$app = new \Slim\Slim();

// handle GET requests for /friends
$app->get('friends', function () use ($app) {  
  // query database for all Facebook Friends
  $friends = R::find('FacebookFriends'); 
  
  // send response header for JSON content type
  $app->response()->header('Content-Type', 'application/json');
  
  // return JSON-encoded response body with query results
  echo json_encode(R::exportAll($friends));
});

// run
$app->run();
