<?php

namespace Db;
use \PDO as PDO;

/*
 * This class is a database access abstraction layer (DBAL)
 * It allows connecting and disconnecting from a database
 * It has select, update, delete, and insert methods
 */

class PdoDbal {

     private $dsn,
	     $user,
	     $password,
	     $conn,
	     $result;

     public function __construct($dsn, $user, $password) {
	  $this->dsn = $dsn;
	  $this->user = $user;
	  $this->password = $password;
          try {
	  $this->conn = new PDO($dsn, $user, $password);
	       echo 'connected';
          } catch (PDOException $e) {
	       echo 'Connection Failed: ' . $e->getMessage();
	  }
	  return $this->conn;
     }

     public function query($querySql) {
	  $query = $this->conn->prepare("$querySql");
	  $query->execute();
	  $result = $query->fetch(PDO::FETCH_OBJ);
	  return $result;
     }

}

$newconnection = new PdoDbal('mysql:dbname=weblamp442;host=127.0.0.1', 'root', 'weblamp442');

$testquery = $newconnection->query("SELECT * FROM User");
var_dump($testquery);

?>

