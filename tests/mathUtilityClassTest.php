<?php

class mathUtilityClassTest extends PHPUnit_Framework_TestCase {
	public function setup() {
		//Arrange
		$this -> MathUtility = new MathUtility();
	}
	
	//start testing mahUtilityClass
	public function testShouldReturnstringZeroWhenTheresZeroPassed() {
		//Act
		$answer = $this -> MathUtility -> isnumeric("0");

		//Assert
		$this -> assertTrue($answer == true);
	}

}
?>
