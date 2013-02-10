<?php

namespace Tests\Src;
use \Src\Car as Car;

/**
 * unit test code to test Car object
 */

class testCar extends \PHPUnit_Framework_TestCase {

     /**
      * Create a test Car object
      */

     public function testCar() {
	  $car = new Car();
	  return $car;     
     }

     /**
      * @depends testCar
      */

     public function testhonk($car) {
	  $this->assertEquals('', $car->honk());
     }
}

?>
