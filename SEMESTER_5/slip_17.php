<?php
	$arr1;
	$arr = array("Sagar" => 31, "Vicky" => 41, "Leena" => 39, "Ramesh" => 40);
	
	print("<br><br>Original Array :-");
	print_r($arr);
	
	asort($arr);
	print("<br><br>Ascending Sort By Value :-");
	print_r($arr);
	
	ksort($arr);
	print("<br><br>Ascending Sort By Key :-");
	print_r($arr);
	
	arsort($arr);
	print("<br><br>Descending Sort By Value :-");
	print_r($arr);
	
	krsort($arr);
	print("<br><br>Descending Sort By Key :-");
	print_r($arr);
?>
