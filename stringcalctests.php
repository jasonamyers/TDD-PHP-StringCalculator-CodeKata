<?php
// String Calculator Tests

require_once 'stringcalc.php';
require_once 'PHPUnit/Autoload.php';

class StringCalculatorTests extends PHPUnit_Framework_TestCase {

	protected $stringcalc;

	protected function setUp() {
		$this->stringcalc = new StringCalculator();
	}

	protected function tearDown() {
		unset($this->stringcalc);
	}

	function testAddEmptyString() {
		$expected = 0;
		$actual = $this->stringcalc->add("");
		$this->assertEquals($expected, $actual);
	}

	function testAddSingleNumberString() {
		$expected = 1;
		$actual = $this->stringcalc->add("1");
		$this->assertEquals($expected, $actual);
	}

	function testAddTwoNumberString() {
		$expected = 3;
		$actual = $this->stringcalc->add("1,2");
		$this->assertEquals($expected, $actual);
	}

}

?>