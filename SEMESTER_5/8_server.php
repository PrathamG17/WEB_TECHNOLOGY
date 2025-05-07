<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$number1 = $_POST['no1'];
	$number2 = $_POST['no2'];
	
	function Remainder($number1, $number2)
	{
		if($number2 != 0)
			$result = $number1 % $number2;
		print("<br>Remainder :- $result<br>");
	}
	
	function RaisedTo($number1, $number2)
	{
		$result = $number2**$number1;
		print("<br>Power :- $result<br>");
	}
	
	function SumOfN($number1)
	{
		$sum = 0;
		
		for($i = 0; $i <= $number1; $i++)
		{
			$sum = $sum + $i;
		}
		
		print("<br>First $number1 numbers total :- $sum<br>");
	}
	
	function Factorial($number2)
	{
		$i = 0;
		$result = 1;
		for($i = 1; $i <= $number2; $i++)
		{
			$result = $result * $i;
		}
		print("<br>Factorial of $number2 :- $result<br>");
	}
	
	Remainder($number1, $number2);
	
	RaisedTo($number1, $number2);
	
	SumOfN($number1);
	
	Factorial($number2);
?>

