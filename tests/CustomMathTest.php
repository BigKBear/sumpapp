<?php

include 'CustomMath.php';

class CustomMathTest extends PHPUnit_Framework_TestCase {

	public function setup() {
		//Arrange
		$this -> customMath = new CustomMath();
	}

	//first value checks
	public function testShouldThrowExceptionWhenTheresAStringPassedAsFirstVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected first value to be number');

		//Act
		$answer = $this -> customMath -> add("asdf", "Asdf");
	}

	public function testShouldThrowExceptionWhenTheresANullPassedAsFirstVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected first value to be number');

		//Act
		$answer = $this -> customMath -> add(null, "Asdf");
	}

	//second value checks
	public function testShouldThrowExceptionWhenTheresAStringPassedAsSecondVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');

		//Act
		$answer = $this -> customMath -> add("0", "Asdf");
	}

	public function testShouldThrowExceptionWhenTheresANullPassedAsSecondVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');

		//Act
		$answer = $this -> customMath -> add("0", null);
	}

	public function testShouldReturnZeroWhenTheresZeroPassedAsFirstVariableAndZeroPassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add("0", "0");

		//Assert
		$this -> assertTrue($answer == 0);
	}

	public function testShouldReturnOneWhenTheresZeroPassedAsFirstVariableAndOnePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add("0", "1");

		//Assert
		$this -> assertTrue($answer == 1);
	}

	public function testShouldReturnNegThreeWhenTheresZeroPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add("0", "-3");

		//Assert
		$this -> assertTrue($answer == -3);
	}

	public function testShouldReturnNegFiveWhenTheresNegTwoPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add("-2", "-3");

		//Assert
		$this -> assertTrue($answer == -5);
	}

	//Start test for Subtraction function in the CustomMath.php file
	public function testSubtractWhenNegNumPassedAsFirstVariableAndNegNumPassedAsSecondVariableSmallerThanFirstVariableShouldReturnAPositiveNumber() {
		//Act
		$answer = $this -> customMath -> subtract("-2", "-10");

		//Assert
		$this -> assertTrue($answer == 8);

	}

}
?>
