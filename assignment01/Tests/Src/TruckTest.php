<?php

namespace Tests\Src;
use \Src\Truck as Truck;

/**
 * unit test code to test Truck object
 */

class testTruck extends \PHPUnit_Framework_TestCase {

     /**
      * Create a test Truck object
      */

     public function testTruck() {
	  $truck = new Truck();
	  return $truck;     
     }

     /**
      * @depends testTruck
      */

     public function testhonk($truck) {
	  $this->assertEquals('', $truck->honk());
     }
}

?>
