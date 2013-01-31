<?php

namespace Src;

require_once('VehicleInterface.php');

/**
 * Abstract class to represent vehicle
 */

abstract class Vehicle implements VehicleInterface
{
     /**
      * Year of manufacture
      * @var int
      */
     protected $_year;

     /**
      * Vehicle make
      * @var string
      */
     protected $_make;

     /**
      * Vehicle model
      * @var string
      */
     protected $_model;

     /**
      * Engine type of vehicle
      * @var string
      */
     protected $_engineType;   

     /**
      * Return the vehicle make
      * @return string
      */
     public function getVehicleMake() {
	  return $this->_make;
     } 

     /**
      * Set the vehicle make
      */
     public function setMake($make) {
	  $this->_make = $make;
     }

     /**
      * Return the vehicle model
      * @return string
      */
     public function getVehicleModel() {
	  return $this->_model;
     } 

     /**
      * Set the vehicle model
      */
     public function setModel($model) {
	  $this->_model = $model;
     }

     /**
      * Return the number of doors
      * @return int
      */
     public function getNumberOfDoors() {
	  return $this->_numberOfDoors;
     }

     /**
      * Set the number of doors
      */
     public function setNumberOfDoors($doors) {
	  $this->_doors = $doors;
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
      * Return the engine type
      * @return string
      */
     public function getEngineType() {
	  return $this->_engineType;
     }

     /**
      * Set the engine type
      */
     public function setEngineType($engineType) {
	  $this->_engineType = $engineType;
     }

}

?>
