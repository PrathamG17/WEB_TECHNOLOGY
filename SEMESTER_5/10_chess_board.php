<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$row;
	$col;
	$total;
	
	print("<table border = 10 width = 500 cellspacing = 0 cellpadding = 0>");
	for($row = 1; $row <= 8; $row++)
	{
		print("<tr>");
		
		for($col = 1; $col <= 8; $col++)
		{
			$total = $row + $col;
			
			if(0 == ($total % 2))
			{
				print("<td height = 80 width = 160 bgcolor = white></td>");
			}
			else
			{
				print("<td height = 80 width = 160 bgcolor = Black></td>");
			}
		}
		
		print("</tr>");
	}
	
	print("</table>");
?>
	
