<?php

namespace Tests\Db;
use \Db\PdoDbal as PdoDbal;

/*
 * unit test code for PDO database abstraction layer
 */

class testPdoDbal extends \PHPUnit_Framework_TestCase {

     private $conn;

     // configuration
//     	  $dsn = 'mysql:dbname=weblamp442;host=127.0.0.1';
//	  $user = 'root';
//	  $password = 'weblamp442';

     /*
      * construct class
      */

//     public function setUpTest() {
//	  $this->conn = new PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');
 //    }

     /*
      * test that database can be connected to
      */

     public function testConnection() {
	  $conn = new PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');
	  $conn->connect();
	  $this->assertNotEmpty($conn->connect());
     }

     /*
      * @depends testConnection
      */

     public function testQuery() {
	  $conn = new PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');
	  $testquery = $conn->query("SELECT * FROM User");
	  $this->assertNotEmpty($testquery);
	  var_dump($testquery);
     }


}
?>
