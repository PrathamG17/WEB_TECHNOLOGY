<?php
	$string = $_POST['str'];
	$separator = $_POST['separator'];
	$choice = $_POST['choice'];
	$separator1 = $_POST['separator1'];
	
	print("<br>Original String : $string<br>");
	
	switch($choice)
	{
		case 1 :
			$arr = explode($separator, $string);
			print("<br>Separated Strings : - ");
			print_r($arr);
			break;
		
		case 2 :
			$result = str_replace($separator, $separator1, $string);
			print("<br>Replaced String :- $result<br>");
			break;
			
		case 3 :
			$position = strrpos($string, " ") + 1;
			$last = substr($string, $position);
			print("<br>Last Word Of String :- $last<br>");
			break;
	}
?>

