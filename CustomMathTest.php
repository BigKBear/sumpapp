<?php

require_once 'CustomMath.php';

class CustomMathTest extends PHPUnit_Framework_TestCase {

	public $test;

	public function setup() {
		$this -> test = new CustomMath(s);
	}

	public function testadd() {
		$answer = $this -> test -> add(3, 5);
		$this -> assertTrue($answer == 8);
	}

	public function testmultiply() {
		$answer = $this -> test -> multiply(2, 2);
		$this -> assertTrue($answer == 4);
	}

	public function testsubtract() {
		$answer = $this -> test -> subtract(5, 1);
		$this -> assertTrue($answer == 4);
	}

	public function testdivide() {

		$answer = $this -> test -> divide(10, 5);

		$this -> assertTrue($answer == 2);

	}

}
?>
