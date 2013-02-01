<?php

namespace Tests\Src;

/**
 * unit test code to test Vehicle object
 */

class testVehicle extends \PHPUnit_Framework_TestCase {
     
     public function testhonk() {
	  $stub = $this->getMockForAbstractClass('\Src\Vehicle');
	  $this->assertSame('', $stub->honk());
     }



?>
