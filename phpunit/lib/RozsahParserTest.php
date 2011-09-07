<?php

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__) . '/../../lib/RozsahParser.php';

/**
 * Test class for RozsahParser.
 * Generated by PHPUnit on 2011-03-09 at 21:14:37.
 */
class RozsahParserTest extends PHPUnit_Framework_TestCase {

    /**
     * @var RozsahParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new RozsahParser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    public function testParse() {
        $this->assertEquals(array('P'=>2, 'C'=>3), $this->object->parse('2P + 3C'));
        $this->assertEquals(array('K'=>2, 'C'=>3, 'L'=>1), $this->object->parse('2K + 3C + 1L'));
    }

}
?>