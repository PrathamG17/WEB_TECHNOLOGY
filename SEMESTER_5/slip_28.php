<?php
	$arr;
	$total;
	$record;
	$percentage;
	$file = $_POST['fname'];
	
	$allRecords = file($file);
	
	print("<table border = 10 width = 100 align = center>");
	print("<tr>");
	print("<th>Roll No.</th><th>Name.</th><th>O.S.</th><th>W.T.</th><th>D.S.</th><th>Python.</th><th>Java.</th><th>C.N.<th>Percentage</th>");
	print("</tr>");

	foreach($allRecords as $record)
	{
		$arr = explode(" ", $record);
		$total = $arr[2] + $arr[3] + $arr[4] + $arr[5] + $arr[6] + $arr[7];
		$percentage = $total / 6;
		print("<tr align = center>");
		print("<td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td><td>$percentage</td>");
		print("</tr>");		
	}
	
	print("</table>");

?>

