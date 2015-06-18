<?php

require_once Î÷ÎõCustomMath.phpÎéÎ÷;

class CustomMathTest extends PHPUnit_Framework_TestCase{

public $test;

public function setup()

{

$this ->test = new CustomMath(8);

}

public function testName {

$answer = $this->test-> add(3,5);

//bunch of other functions other than assertTrue

$this->assertTrue($answer == 8);

}

public function testName {

$answer = $this->test-> add(2,2);

//bunch of other functions other than assertTrue

$this->assertTrue($answer == 4);

}

public function testName {

$answer = $this->test-> subtract(5,1);

//bunch of other functions other than assertTrue

$this->assertTrue($answer == 4);

}

public function testName {

$answer = $this->test-> multiply(5,10);

//bunch of other functions other than assertTrue

$this->assertTrue($answer == 50);

}

}

?>
