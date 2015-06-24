<?php
/*
 * Kyle St Hill
 * CustomMath.php for Calculator.php
 * Using POST method
 */

class CustomMath {
	public function add($x, $y) {
		//var_dump($x); 
		if (($x === 0) && ($y === 0)) {
			return "0";
		} else if (($x === 0) && (($y > 0) || ($y < 0))) {
			return $x + $y;
		} else if ($y == NULL) {
			throw new InvalidArgumentException('Expected Second value to be number');
		} else if (($x === 0) && (is_string($y))) {
			throw new InvalidArgumentException('Expected Second value to be number');
		} else if ($x == NULL) {
			throw new InvalidArgumentException('Expected first value to be number');
		} else if (is_string($x)) {
			throw new InvalidArgumentException('Expected first value to be number');
		} else if (is_string($y)) {
			throw new InvalidArgumentException('Expected Second value to be number');
		} else {
			return $x + $y;
		}
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