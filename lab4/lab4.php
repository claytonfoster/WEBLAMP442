<?php

// configuration
$dsn = 'mysql:dbname=weblamp442;host=127.0.0.1';
$user = 'root';
$password = 'weblamp442';

// connect to database
try {
     $db = new PDO($dsn, $user, $password);
     echo 'connected';
} catch (PDOException $e) {
     echo 'Connection Failed: ' . $e->getMessage();
}

// perform an insert into database table
$params = array (':first' => 'Clayton', ':last' => 'Foster');
$qry = $db->prepare('
     INSERT INTO User (firstname, lastname) VALUES (:first, :last)');
$qry->execute($params);

// fetch last inserted row
$pk = $db->lastInsertId();
$qry = $db->prepare("
     SELECT firstname, lastname FROM User WHERE id = $pk");
$qry->execute();
$result = $qry->fetch(PDO::FETCH_OBJ);
echo $result->firstname . ' ' . $result->lastname . "\n";

// feetch all rows and display them
$sql = "SELECT firstname, lastname FROM User";
$result = $db->query($sql);
foreach($result as $row) {
     print $row['firstname'] . ' ' . $row['lastname'] . "\n";
}

//
?>

