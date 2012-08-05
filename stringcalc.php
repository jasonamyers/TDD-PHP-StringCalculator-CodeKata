<?php
// String Calculator

class StringCalculator{

	function add($string){
		$sum = 0;
		if (strlen($string) != 0 ){
			$numbers = preg_split("/[\\n|,]+/", $string);
			foreach ($numbers as $number) {
				$sum += $number;
			}
			return $sum;
		} else {
			return 0;
		}
	}
}
?>