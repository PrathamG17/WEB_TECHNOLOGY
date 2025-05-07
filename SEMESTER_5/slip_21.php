<?php
	$total = 0;
	$average = 0;
	
	$temperature = array(68, 70, 75, 84, 93, 73, 73, 82, 72, 72, 71, 62, 64, 65, 67);
	
	$count = count($temperature);
	
	foreach($temperature as $temp)
		$total = $total + $temp;
		
	$average = $total / $count;
	
	rsort($temperature);
	
	print("<br>Original Temperatures :-");
	print_r($temperature);

	$temperature = array_slice($temperature, 0, 5);
		
	print("<br>Average Temperature :- $average<br>");
	
	print("<br>First 5 Warmest Temperature :-");
	foreach($temperature as $temp)
		print("<br>$temp");
?>
