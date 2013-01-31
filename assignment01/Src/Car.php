<?php

namespace Src;

require_once('Vehicle.php');

/**
 * Concrete class that extends Vehicle to represent Car
 */
class Car extends Vehicle {

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
