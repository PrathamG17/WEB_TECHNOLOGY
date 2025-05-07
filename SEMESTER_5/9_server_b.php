<?php
	
	$result;
	
	function Addition($number1 = 0, $number2 = 0)
	{
		$result = $number1 + $number2;
		print("<br>Addition :- $result<br>");
	}
	
	function Subtraction($number1 = 0, $number2 = 0)
	{
		$result = $number1 - $number2;
		print("<br>Subtraction :- $result<br>");
	}
	
	function Multiplication($number1 = 1, $number2 = 1)
	{
		$result = $number1 * $number2;
		print("<br>Multiplication :- $result<br>");
	}
	
	function Division($number1 = 1, $number2 = 1)
	{
		$result = $number1 / $number2;
		print("<br>Division :- $result<br>");
	}
	
	function Remainder($number1 = 1, $number2 = 1)
	{
		$result = $number1 % $number2;
		print("<br>Remainder :- $result<br>");
	}
	
	function Exponential($number1 = 1, $number2 = 1)
	{
		$result = $number1**$number2;
		print("<br>$number1^$number2 :- $result<br>");
	}
	
?>

