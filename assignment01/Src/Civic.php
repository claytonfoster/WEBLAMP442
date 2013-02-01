<?php

namespace Src;

require_once('Car.php');

/**
 * Concrete class that extends Car to represent a Civic
 */

class Civic extends Car {

     /**
      * Constructor to build a Civic
      * @param $make		   string - make of car
      * @param $model		   string - model of car
      * @param $year		   integer - model year
      * @param $numberOfDoors	   integer - number of doors
      * @param $engineType	   string - engine type
      */
     public function __construct($year = null, $numberOfDoors = 4, $engineType = 'gas') {
	  $this->setMake('Honda');
	  $this->setModel('Civic');
	  $this->setYear($year);
	  $this->setNumberOfDoors($numberOfDoors);
	  $this->setEngineType($engineType);
     }

     /**
      * Honk method for a Civic - return 'honk honk'
      * @return string
      */
     public function honk() {
	  return "honk honk";
     }

}

$civic = new Civic(2012);

//var_dump ($civic);
var_dump ($civic->getNumberOfDoors());
var_dump ($civic->getMake());
var_dump ($civic->honk());
var_dump ($civic->getEngineType());
var_dump ($civic->getYear());

?>
