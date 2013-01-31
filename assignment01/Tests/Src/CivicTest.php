<?php

namespace Tests\Src;
use \Src\Civic as Civic;

/**
 * unit test code to test Civic object
 */

class testCivic extends \PHPUnit_Framework_TestCase {

     /**
      *
      */



     public function testhonk() {
	  $civic = new Civic();
	  $this->assertEquals('honk honk', $civic->honk());
     }
}
