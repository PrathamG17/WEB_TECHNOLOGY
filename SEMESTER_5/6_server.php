<?php
	
	$string1 = $_POST['str1'];
	$string2 = $_POST['str2'];
	$count = $_POST['count'];	

	if(0 == strpos($string2, $string1) || strpos($string2, $string1))
	{
		print("$string1 Is Present At Begining At $string2<br>");
	}
	else
	{
		print("$string1 Is Not Present At Begining At $string2<br>");	
	}
	
	$position = strpos($string2, $string1);
	print("Position of $string1 in $string2 is $position<br>");
	
	$result = strncmp($string1, $string2, $count);
	if(0 == $result)
	{
		print("Both String $string1 & $string2 matches first $count characters<br>");
	}
	else
	{
		print("String Not Matches<br>");
	}
?>

