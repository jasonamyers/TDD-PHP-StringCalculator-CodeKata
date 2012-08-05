<?php
// String Calculator Tests

require_once 'stringcalc.php';
require_once 'PHPUnit/Autoload.php';

class StringCalculatorTests extends PHPUnit_Framework_TestCase {

	function testAddEmptyString() {
		$stringcalc = new StringCalculator();
		$expected = 0;
		$actual = $stringcalc->add("");
		$this->assertEquals($expected, $actual);
	}

	function testAddSingleNumberString() {
		$stringcalc = new StringCalculator();
		$expected = 1;
		$actual = $stringcalc->add("1");
		$this->assertEquals($expected, $actual);
	}

}

?>