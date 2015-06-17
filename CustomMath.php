<?php
/*
 * Kyle St Hill
 * CustomMath.php for Calculator.php 
 * Using POST method
 */ 
class CustomMath
{
		public static function add($x, $y) {
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