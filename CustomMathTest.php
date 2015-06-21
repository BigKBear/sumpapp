<?php

class CustomMath {
	
	private function isValidMathParam($x) {
		return $x != null && !is_string($x);
	}
	
	public function add($x, $y) {
		if (!isValidMathParam($x)) {
                        throw new InvalidArgumentException('Expected first value to be number');
                }
                
		if (!isValidMathParam($y)) {
                        throw new InvalidArgumentException('Expected Second value to be number');
                } 
		return  $x + $y;
	}
	/*
	public function add($x, $y) {
		$answer = 0;
		 if ($y == NULL) {
                        throw new InvalidArgumentException('Expected Second value to be number');
                } else if ($x == NULL) {
                        throw new InvalidArgumentException('Expected first value to be number');
                } else if (is_string($x)){//||(($x!=0))) {
			throw new InvalidArgumentException('Expected first value to be number');
		} else  {
			$answer = $x + $y;
		}
	}
	*/
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
	//second value checks
	public function testShouldThrowExceptionWhenTheresAStringPassedAsSecondVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');

		//Act
		$answer = $this -> customMath -> add(0, "Asdf");
	}
*/
	public function testShouldThrowExceptionWhenTheresANullPassedAsSecondVariable() {
		$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');

		//Act
		$answer = $this -> customMath -> add(0, null);
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
		$answer = $this -> customMath -> add(0,1);

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
	}
*/
}
?>
