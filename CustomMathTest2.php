<?php

class CustomMath {
	public function add($x, $y) {
		$answer = $x + $y;

		if (is_string($x)) {
			throw new InvalidArgumentException('Expected first value to be number');
		} else if ($x == NULL) {
			throw new InvalidArgumentException('Expected first value to be number');
		} else {
			throw new InvalidArgumentException('Expected first value to be number');
		}
	}
}

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

/*
	public function testShouldReturnZeroWhenTheresZeroPassedAsFirstVariableAndZeroPassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add(0, 0);

		//Assert
		$this -> assertTrue($answer == 0);
	}

	public function testShouldReturnOneWhenTheresZeroPassedAsFirstVariableAndOnePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add(0, 1);

		//Assert
		$this -> assertTrue($answer == 1);
	}

	public function testShouldReturnNegThreeWhenTheresZeroPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add(0, -3);

		//Assert
		$this -> assertTrue($answer == -3);
	}

	public function testShouldReturnNegFiveWhenTheresNegTwoPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> add(-2, -3);

		//Assert
		$this -> assertTrue($answer == -5);
	}*/

}
?>
