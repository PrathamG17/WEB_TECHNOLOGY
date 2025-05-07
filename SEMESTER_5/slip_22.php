<?php
	$choice = $_POST['choice'];
	
	$Queue = array(10, 20, 30, 40, 50);
	
	switch($choice)
	{
		case 1 :
			array_unshift($Queue, 60);
			
			print("<br>Queue As Follows :-");
			foreach($Queue as $element)
				print("  $element");
			
			break;
		
		case 2 :
			array_shift($Queue);
			
			print("<br>Queue As Follows :-");
			foreach($Queue as $element)
				print("  $element");
			
			break;
		
		case 3 :
			print("<br>Queue As Follows :-");
			foreach($Queue as $element)
				print("  $element");
			
			break;
			
		default :
			print("<br>Invalid Choice!!<br>");
	}
?>

