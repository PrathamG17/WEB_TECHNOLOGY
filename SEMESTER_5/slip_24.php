<?php
	//$boolean;
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	
	/*$boolean = copy($source, $destination);
	if($boolean)
		print("<br>[FILE COPIED SUCCESSFULLY]<br>");
	else
		print("<br>[ERROR IN FILY COPY OPERATION]<br>");
	*/
	
	$file = fopen($destination, "a");
	
	if(false == $file)
		die("UNABLE TO OPEN FILE");
		
	$arr = file($source);
	$string = implode("\n", $arr);
	
	$arr = fwrite($file, $string);
	if(0 == $arr)
		print("UNABLE TO APPEND FILE");
	else
		print("FILE APPENDED SUCCESSFULLY");
	
	fclose($source);
	fclose($destination);
?>

