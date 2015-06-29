<?php

class MathUtility {
	public static function isnumeric($x1) {
		return ((intval($x1)) || ($x1 == "0"));
	}
}
?>