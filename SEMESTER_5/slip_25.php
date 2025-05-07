<?php
	$type;
	$fstatistics;
	$fname = $_POST['fname'];
	$choice = $_POST['choice'];
	
	$fstatistics = stat($fname);
	
	switch($choice)
	{
		case 1 :
			$type = filetype($fname);
			print("<br>[File Type :- $type]<br>");
			break;
			
		case 2 :
			$type = $fstatistics[9];
			$type = date("F d Y H:i:s", $type);
			print("<br>[Last Modification Time :- $type]<br>");
			break;
			
		case 3 :
			$type = $fstatistics[7];
			print("<br>[File Size :- $type bytes]<br>");
			break;
		
		case 4 :
			$type = unlink($fname);
			if($type)
				print("<br>[UNABLE TO DELETE FILE]<br>");
			else
				print("<br>[File Deleted Successfully]<br>");
		
		default :
			print("<br>[Invalid choice]<br>");
	}
?>

