<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$i;
	$count;
	$grade;
	$total = 0;
	$percentage;
	
	$serial = $_POST['serialNo'];
	$name = $_POST['name'];
	$marks = explode(",", $_POST['marks']);
	
	$count = count($marks);
	for($i = 0; $i < $count; $i++)
	{
		$total = $total + $marks[$i];
	}
	
	$percentage = $total / $count;
	
	if($percentage >= 70)
		$grade = 'A';
	else if($percentage >= 60)
		$grade = 'B';
	else if($percentage >= 40)
		$grade = 'C';
	else
		$grade = "FAIL";
		
	print("<table text-align = center border = 10 width = '100%'>");
	print("<tr><th>Serial Number</th><th>Name</th><th>Total</th><th>Percentage</th><th>Grade</th></tr>");
	print("<tr align = center><td>$serial</td><td>$name</td><td>$total</td><td>$percentage</td><td>$grade</td></tr>");
	print("</table>");
?>

