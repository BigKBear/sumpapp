<?php
/*
 * Kyle St Hill
 * CustomMath.php for Calculator.php
 * Using POST method
 */

class CustomMath {

	//Mahees
	public static function add($x, $y) {
		if (!is_numeric($x)) {
			throw new InvalidArgumentException('Expected first value to be number');
		}
		if (!is_numeric($y)) {
			throw new InvalidArgumentException('Expected Second value to be number');
		}

		return $x + $y;
	}

	function subtract($x, $y) {
		return $x - $y;
	}

	function multiply($x, $y) {
		return $x * $y;
	}

	function divide($x, $y) {
		return $x / $y;
	}

}
?>