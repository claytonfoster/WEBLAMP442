<?php

require_once('Car.php');

/**
 * Concrete class that extends Car to represent a Civic
 */

class Civic extends Car {

     /**
      * The methods in Car are inherited and haven't been duplicated in the Civic class
      */

     /**
      * Honk method for a Civic - return 'honk honk'
      * @return string
      */
     public function honk() {
	  return "honk honk";
     }

     /**
      * Constructor to build a Civic
      * @param $numberOfDoors	   integer - number of doors
      * @param $numberOfWheels	   integer - number of wheels
      * @param $engineType	   string - engine type
      */
     public function __construct($make= 'Honda', $numberOfDoors = 4, $numberOfWheels = 4, $engineType = 'hybrid') {
	  $this->_make = $make;
	  $this->_numberOfDoors = $numberOfDoors;
	  $this->_numberOfWheels = $numberOfWheels;
	  $this->_engineType = $engineType;
     }

}

$civic = new Civic();
$civic->setYear(2012);

var_dump ($civic);
var_dump ($civic->getEngineType());
var_dump ($civic->getNumberOfDoors());
var_dump ($civic->getVehicleMake());
var_dump ($civic->honk());
var_dump ($civic->getEngineType());
var_dump ($civic->getYear());

?>
