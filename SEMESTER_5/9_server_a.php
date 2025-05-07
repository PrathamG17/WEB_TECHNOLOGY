<?php
	include("9_server_b.php");
	
	$number1 = $_POST['no1'];
	$number2 = $_POST['no2'];
	
	$choice = $_POST['choice'];
	
	switch($choice)
	{
		case 1 :
			Addition($number1, $number2);
			break;
		
		case 2 :
			Subtraction($number1, $number2);
			break;
			
		case 3 :
			Multiplication($number1, $number2);
			break;
			
		case 4 :
			Division($number1, $number2);
			break;
			
		case 5 :
			Remainder($number1, $number2);
			break;
			
		case 6 :
			Exponential($number1, $number2);
			break;
			
		default :
			print("<br>Enter Valid Choices!!!<br>");
	}
?>

