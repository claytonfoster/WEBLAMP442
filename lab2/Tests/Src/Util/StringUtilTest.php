<?php
namespace Tests\Util;
use \Util\StringUtil as StringUtil;

/**
 * unit test code to test StringUtil object
 */
class testStringUtil extends \PHPUnit_Framework_TestCase
{
    /**
     * Get empty data set
     */
    public function getEmptyValues() {
        return array(
                array( null ),           // null
                array( "" ),             // empty string
                array( array() ),         // empty array
                );
    }

    /**
     * @dataProvider getEmptyValues()
     */
    public function testIsNullOrEmptyPass( $value ) {
        $this->assertTrue( StringUtil::isNullOrEmpty( $value ) );
    }

    /**
     * Define non-empty dummy data
     */
    public function getNonEmptyValues() {
        return array(
                array('1'),                    // string
                array(1),                      // integer
                array("abc"),                  // string
                array('null'),                 // null string
                array(array('abc')),           // indexed array
                array(array('abc' => 'def')),  // associative array
                array( new \stdClass() )       // empty object. This is relatively debatable, but we choose to define
                                               // empty class as non-empty. In real world, you may re-define it base on context
                );
    }

    /**
     * @dataProvider getNonEmptyValues()
     */
    public function testIsNullOrEmptyFail( $value ) {
        $this->assertFalse( StringUtil::isNullOrEmpty( $value ) );
    }
}
?>
