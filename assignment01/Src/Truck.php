<?php

namespace Src;

require_once('Vehicle.php');

/**
 * Concrete class that extends Vehicle to represent a Truck
 */

class Truck extends Vehicle {

     /**
      * Honk method
      * By default returns on empty string
      * @return string
      */
     public function honk() {
	  return "";
     }

}

?>
