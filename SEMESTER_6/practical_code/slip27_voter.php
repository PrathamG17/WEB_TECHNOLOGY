<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$name = $_GET['q'];
	$age = $_GET['r'];
	$nationality = $_GET['s'];
	
	if(strtoupper($name) == $name)
	{
		if($age > 18)
		{
			if($nationality == "Indian")
			{
				print("<br/>VALIDATION SUCCESSFULL<br/>");
				print("<br/>NAME : $name<br/>");
				print("<br/>AGE : $age<br/>");
				print("<br/>NATIONALITY : $nationality<br/>");
			}
			else
				print("INVALID NATIONALITY");
		}
		else
			print("INVALID AGE");
		
	}
	else
		print("INVALID NAME");
?>
