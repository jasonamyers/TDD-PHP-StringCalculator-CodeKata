<?php

namespace TDDPHPStringCalculatorCodeKata;
// String Calculator Tests
require_once 'stringcalc.php';
use PHPUnit;
require_once 'PHPUnit/Autoload.php';

class stringcalctests extends PHPUnit_Framework_TestCase
{
    protected $stringcalc;

    protected function setUp()
    {
        $this->stringcalc = new StringCalculator();
    }

    protected function tearDown()
    {
        unset($this->stringcalc);
    }

    public function testAddEmptyString()
    {
        $expected = 0;
        $actual = $this->stringcalc->add("");
        $this->assertEquals($expected, $actual);
    }

    public function testAddSingleNumberString()
    {
        $expected = 1;
        $actual = $this->stringcalc->add("1");
        $this->assertEquals($expected, $actual);
    }

    public function testAddTwoNumberString()
    {
        $expected = 3;
        $actual = $this->stringcalc->add("1,2");
        $this->assertEquals($expected, $actual);
    }

    public function testAddThreeNumberString()
    {
        $expected = 6;
        $actual = $this->stringcalc->add("1,2,3");
        $this->assertEquals($expected, $actual);
    }

    public function testAddFourNumberString()
    {
        $expected = 34;
        $actual = $this->stringcalc->add("10,9,8,7");
        $this->assertEquals($expected, $actual);
    }

    public function testAddThreeNumberStringWithNewLineDelimiter()
    {
        $expected = 6;
        $actual = $this->stringcalc->add("1\n2,3");
        $this->assertEquals($expected, $actual);
    }

}
