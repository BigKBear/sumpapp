<?php
/*
 * Kyle St Hill
 * CustomMath.php for Calculator.php
 * Using POST method
 */

class CustomMath {

	/*
	//kyle mod 2 on mahees version
		public static function isnumeric($x1) {
			if (intval($x1)) {
				return $x1;
			}
			return null;
	
		}
	
		public static function add($x, $y) {
			if (CustomMath::isnumeric($x)) {
				throw new InvalidArgumentException('Expected first value to be number');
			}
	
			if (CustomMath::isnumeric($y)) {
				throw new InvalidArgumentException('Expected Second value to be number');
			}
	
			return $x + $y;
		}
	*/
	
	/*
	 //kyle mod 2 on mahees version
	 public static function isnumeric($x1) {
	 return intval(mixed $x1 [, int $base = 10]);
	 }
	 public static function add($x, $y) {
	 if (CustomMath::isnumeric($x)) {
	 throw new InvalidArgumentException('Expected first value to be number');
	 }
	 if (CustomMath::isnumeric($y)) {
	 throw new InvalidArgumentException('Expected Second value to be number');
	 }
	 return $x + $y;
	 }
	 */

	/*
	 //kyle mod on mahees version
	 public static function add($x, $y) {
	 if ((is_string($x)) || (is_null($x))) {
	 throw new InvalidArgumentException('Expected first value to be number');
	 }
	 if ((is_string($y)) || (is_null($y))) {
	 throw new InvalidArgumentException('Expected Second value to be number');
	 }
	 return $x + $y;
	 }*/

	/*
	 //Kyle
	 public static function add($x, $y) {
	 if ((is_numeric($x)) && (is_numeric($y))) {
	 return $x + $y;
	 }
	 if ((is_string($x)) || (is_null($x))) {
	 throw new InvalidArgumentException('Expected first value to be number');
	 }
	 if ((is_string($y)) || (is_null($y))) {
	 throw new InvalidArgumentException('Expected Second value to be number');
	 }
	 }*/

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