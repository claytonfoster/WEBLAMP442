<?php

namespace Src;

require_once('Vehicle.php');

/**
 * Concrete class that extends Vehicle to represent Car
 */
class Car extends Vehicle {

     /**
      * Return the vehicle make
      * @return string
      */
     public function getVehicleMake() {
	  return $this->_make;
     } 

     /**
      * Return the number of doors
      * @return int
      */
     public function getNumberOfDoors() {
	  return $this->_numberOfDoors;
     }

     /**
      * Return the number of wheels
      * @return int
      */
     public function getNumberOfWheels() {
	  return $this->_numberOfWheels;
     } 

     /**
      * Return the engine type
      * @return string
      */
     public function getEngineType() {
	  return $this->_engineType;
     }

     /**
      * Set the year of manufacture
      */
     public function setYear($year) {
	  $this->_year = $year;
     }

     /**
      * Return the year of manufacture
      * @return int
      */
     public function getYear() {
	  return $this->_year;
     }

     /**
      * Honk method
      * By default returns on empty string
      * @return string
      */
     public function honk() {
	  return "";
     }

}

// $car = new Car();
// var_dump ($car->honk());



?>
