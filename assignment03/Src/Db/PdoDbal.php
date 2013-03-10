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
     }

     /*
      * connect to the database
      */

     public function connect() {
	  try {
	       $this->conn = new PDO($this->dsn, $this->user, $this->password);
	       echo 'PDO connection object created';
	  } catch (PDOException $e) {
	       echo 'Connection Failed: ' . $e->getMessage();
	  }
	  return $this->conn;
     }

     /*
      * disconnect from the database - not generally needed when using PDO
      */

     public function disconnect() {
	  $this->conn = null;
	  echo 'disconnected';
     }

     /*
      * perform a sql query on the database
      */

     public function query($querySql) {
//	  echo $querySql;	  
	  $this->result = $this->conn->query($querySql);
	  if ($this->result->rowCount() == 0) {
	       throw new \Exception('No records found');
	  }	  
	  return $this->result;
     }

     /*
      * insert a row into the FacebookFriends table
      */

     public function insert($name, $fbid) {
	  $sql = "INSERT INTO FacebookFriends (name, fbid) VALUES ('$name', '$fbid')";
//	  echo $sql;
	  $this->conn->exec($sql);
     }

}

?>

