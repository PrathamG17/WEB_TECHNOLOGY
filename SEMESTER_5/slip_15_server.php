<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$arr;
	$string = $_POST['string'];
	$words = $_POST['words'];
	$case = $_POST['case'];
	$pad = $_POST['pad'];
	$whitespace = $_POST['whitespace'];
	$reverse = $_POST['reverse'];
	
	print("<br>You Entered :- $string<br>");
	
	if(1 == $words)
	{
		$arr = explode(" ", $string);
		$arr = array_slice($arr, 0, 5);
		$arr = implode(" ", $arr);
		print("<br>First 5 Words String :- $arr<br>");	
	}
	
	if(1 == $case)
	{
		$arr = strtolower($string);
		print("<br>LowerCase :- $arr<br>");
		
		$arr = strtoupper($arr);
		print("<br>TitleCase :- $arr<br>");
	}
	
	if(1 == $pad)
	{
		$arr = str_pad($string, 30, "*", STR_PAD_BOTH);
		print("<br>Padded String :- $arr<br>");
	}
	
	if(1 == $whitespace)
	{
		$arr = ltrim($string, " ");
		print("<br>Whitespace Removed String :- $arr<br>");
	}
	
	if(1 == $reverse)
	{
		$arr = strrev("$string");
		print("<br>Reverse String :- $arr<br>");
	}
?>
