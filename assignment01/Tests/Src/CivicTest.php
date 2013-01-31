<?php

namespace Tests;
use \Src\Civic as Civic;

/**
 * unit test code to test Civic object
 */

class testCivic extends \PHPUnit_Framework_TestCase {

     /**
      *
      */

     public function testhonk() {
	  $this->assertEquals('honk honk', Civic::honk());
     }
}
