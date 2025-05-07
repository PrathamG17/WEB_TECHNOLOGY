<?php
	ini_set('display_errors', 1); 
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL); 

	$con = pg_connect('host = localhost dbname = postgres port = 5432 user = postgres password = Pratham@2002') or die('Unable To Connect');
	
	$no = $_GET['q'];
	$sql = "SELECT * FROM teacher WHERE no = $no";
	$result = pg_query($con, $sql);
	$response = "<center><table border = 1><tr><th>Sr.No.</th><th>Name</th><th>Subject</th><th>Research Area</th></tr><tr>";
	$row = pg_fetch_array($result);
	
	foreach($row as $k => $v)
	{
		if($k == 0 || $k == 1 || $k == 2 || $k == 3)
		$response .= "<td>$v</td>";				//<td>$k:</td>
	}
	$response .= "</tr></table></center>";
	pg_close();
	echo $response; 
?>
