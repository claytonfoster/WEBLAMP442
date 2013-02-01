<?php

namespace Tests\Src;
use \Src\Civic as Civic;

/**
 * unit test code to test Civic object
 */

class testCivic extends \PHPUnit_Framework_TestCase {

     /**
      * Create a test Civic object and test that is was properly constructed
      */

     public function testCivic() {
	  $civic = new Civic();
	  $this->assertEquals('Honda', $civic->getMake());
	  $this->assertEquals('Civic', $civic->getModel());
	  $this->assertObjectHasAttribute('_year', $civic);
	  $this->assertObjectHasAttribute('_doors', $civic);
	  $this->assertObjectHasAttribute('_engineType', $civic);
	  return $civic;     
     }

     /**
      * @depends testCivic
      */

     public function testhonk($civic) {
	  $this->assertEquals('honk honk', $civic->honk());
     }
}

?>
