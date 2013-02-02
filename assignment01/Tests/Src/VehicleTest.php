<?php

namespace Tests\Src;

/**
 * unit test code to test Vehicle object
 */

class testVehicle extends \PHPUnit_Framework_TestCase {

     public $stub;

     /**
      * Create mock for abstract class so that concrete methods can be tested
      */
     public function setUp() {
	  $this->stub =  $this->getMockForAbstractClass('\Src\Vehicle');
     }  

     public function testhonk() {
	  $this->assertSame('', $this->stub->honk());
     }

     public function testGetYear() {
	  $this->assertNull($this->stub->getYear());
     }

     /**
      * data provider for testSetYear method
      * dataset anticipates enventually testing that acceptable values are in year
      */
     public function getYearValues() {
	  return array (
	       array (2012),
	       array (900),
	       array (2050),
	       array ('2050'),
	       array ('year')
	  );
     }

     /**
      * @dataProvider getYearValues()
      */
     public function testSetYear($year) {
	  $this->stub->setYear($year);
	  $this->assertSame($year, $this->stub->getYear());
     }

     public function testGetMake() {
	  $this->assertNull($this->stub->getMake());
     }

     /**
      * data provider for testGetMake method
      */
     public function getMakeValues() {
	  return array (
	       array ('Honda'),
	       array ('Nissan'),
	       array ('Ford'),
	       array (2013)
	  );
     }

     /**
      * @dataProvider getMakeValues()
      */
     public function testSetMake($make) {
	  $this->stub->setMake($make);
	  $this->assertSame($make, $this->stub->getMake());
     }

     public function testGetModel() {
	  $this->assertNull($this->stub->getModel());
     }

     /**
      * data provider for testGetModel method
      */
     public function getModelValues() {
	  return array (
	       array ('Civic'),
	       array ('Leaf'),
	       array ('Fusion'),
	       array (2013)
	  );
     }

     /**
      * @dataProvider getModelValues()
      */
     public function testSetModel($model) {
	  $this->stub->setModel($model);
	  $this->assertSame($model, $this->stub->getModel());
     }

     public function testGetNumberOfDoors() {
	  $this->assertNull($this->stub->getNumberOfDoors());
     }

     /**
      * data provider for testGetNumberOfDoors method
      */
     public function getDoorValues() {
	  return array (
	       array (4),
	       array (2),
	       array (0),
	       array ('4')
	  );
     }

     /**
      * @dataProvider getDoorValues()
      */
     public function testSetNumberOfDoors($doors) {
	  $this->stub->setNumberOfDoors($doors);
	  $this->assertSame($doors, $this->stub->getNumberOfDoors());
     }


}

?>
