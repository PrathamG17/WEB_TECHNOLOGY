<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$arr = array("One" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5);
	
	$choice = $_POST['choice'];
	switch($choice)
	{
		case 1 :
			$reverse = array_reverse($arr);
			print("<br><br>Reversed Array :-");
			print_r($reverse);
			break;
		
		case 2 :
			shuffle($arr);
			print("<br><br>Array In Random Order :-");
			print_r($arr);
			break;
			
		case 3 :
			extract($arr);
			print("<br><br>$One <br>$two <br>$three <br>$four <br>$five");
			break;
		
		case 4 :
			print("<br><br>Array :- ");
			print_r($arr);
			break;
			
		default :
			print("<br><br>Inavlid Choice!!");
	}
?>

