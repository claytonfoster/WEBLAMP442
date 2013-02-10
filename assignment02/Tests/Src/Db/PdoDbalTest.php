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
      * check whether the database can be successfully connected to
      */

     public function testConnection() {
	  $conn = new PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');
	  $this->assertNotEmpty($conn);
     }



}
?>
