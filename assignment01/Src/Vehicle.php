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
      * Number of doors
      * @var int
      */
     protected $_numberOfDoors;

     /** 
      * Number of wheels
      * @var int
      */
     protected $_numberOfWheels;

     /**
      * Engine type of vehicle
      * @var string
      */
     protected $_engineType;   

     /**
      * Return the vehicle make
      * @return string
      */
     abstract public function getVehicleMake();

     /**
      * Return the number of doors
      * @return int
      */
     abstract public function getNumberOfDoors();

     /**
      * Return the number of wheels
      * @return int
      */
     abstract public function getNumberOfWheels();

     /**
      * Return the engine type
      * @return string
      */
     abstract public function getEngineType();
     
     /**
      * Set the year of manufacture
      */
     abstract public function setYear($year);

     /**
      * Return the year of manufacture
      * @return int
      */
     abstract public function getYear();
}


?>
