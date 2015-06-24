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
			return 0;
		} else if ((is_numeric($x)) && (is_numeric($y))) {
			return $x + $y;
		} else if ((is_string($y)) || ($y == null)) {
			throw new InvalidArgumentException('Expected Second value to be number');
			return ;
		} else if ((is_string($x)) || ($x == null)) {
			throw new InvalidArgumentException('Expected first value to be number');
			return ;
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