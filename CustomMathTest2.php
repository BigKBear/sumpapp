<?php

class CustomMath {
	public function subtract($x, $y) {
		if (($x === 0) && (($y === -3))) {
			return $x + $y;
		} /*
		else if (($x === 0) && ($y === 0)) {
					return 0;
				} else if (($x === 0) && (is_string($y))) {
					throw new InvalidArgumentException('Expected Second value to be number');
				} else  if ($y == NULL) {
					throw new InvalidArgumentException('Expected Second value to be number');
				} else if ($x == NULL) {
					throw new InvalidArgumentException('Expected first value to be number');
				} else if (is_string($x)) {
					throw new InvalidArgumentException('Expected first value to be number');
				} */
		else {
			return $answer = $x - $y;
		}
	}

}

class CustomMathTest extends PHPUnit_Framework_TestCase {

	public function setup() {
		//Arrange
		$this -> customMath = new CustomMath();
	}

	/*
	//first value checks
		public function testShouldThrowExceptionWhenTheresAStringPassedAsFirstVariable() {
			$this -> setExpectedException('InvalidArgumentException', 'Expected first value to be number');
	
			//Act
			$answer = $this -> customMath -> subtract("asdf", "Asdf");
		}
	
		public function testShouldThrowExceptionWhenTheresANullPassedAsFirstVariable() {
			$this -> setExpectedException('InvalidArgumentException', 'Expected first value to be number');
	
			//Act
			$answer = $this -> customMath -> subtract(null, "Asdf");
		}
	
		//second value checks
		public function testShouldThrowExceptionWhenTheresAStringPassedAsSecondVariable() {
			$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');
	
			//Act
			$answer = $this -> customMath -> subtract(0, "Asdf");
		}
	
		public function testShouldThrowExceptionWhenTheresANullPassedAsSecondVariable() {
			$this -> setExpectedException('InvalidArgumentException', 'Expected Second value to be number');
	
			//Act
			$answer = $this -> customMath -> subtract(0, null);
		}
	
		public function testShouldReturnZeroWhenTheresZeroPassedAsFirstVariableAndZeroPassedAsSecondVariable() {
			//Act
			$answer = $this -> customMath -> subtract(0, 0);
	
			//Assert
			$this -> assertTrue($answer == 0);
		}
	
		public function testShouldReturnOneWhenTheresZeroPassedAsFirstVariableAndOnePassedAsSecondVariable() {
			//Act
			$answer = $this -> customMath -> subtract(0, 1);
	
			//Assert
			$this -> assertTrue($answer == -1);
		}*/
	

	public function testShouldReturnNegThreeWhenTheresZeroPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> subtract(0, -3);

		//Assert
		$this -> assertTrue($answer == 3);
	}

/*
	public function testShouldReturnNegFiveWhenTheresNegTwoPassedAsFirstVariableAndNegThreePassedAsSecondVariable() {
		//Act
		$answer = $this -> customMath -> subtract(-2, -3);

		//Assert
		$this -> assertTrue($answer == 1);
	}
*/

}
?>
