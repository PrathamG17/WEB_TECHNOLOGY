<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	function Even($element)
	{
		if(0 == ($element % 2))
			return $element;
	}
	
	$arr = array("One" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5);
	
	$choice = $_POST['choice'];
	switch($choice)
	{
		case 1 :
			$chunks = array_chunk($arr, 2, true);
			print("<br><br>Array Chunks :-");
			print_r($chunks);
			break;
		
		case 2 :
			asort($arr);
			print("<br><br>Sorted Array By Values :-");
			print_r($arr);
			break;
			
		case 3 :
			$even = array_filter($arr, "Even");
			print("<br><br>Even Elements :-");
			print_r($even);
			break;
					
		default :
			print("<br><br>Inavlid Choice!!");
	}
?>

