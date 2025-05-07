<?php
	$conn = pg_connect("host = localhost dbname = e1 port = 5432 user = postgres password = 123") or die("UNABLE TO CONNECT !!");
	
	$title = $_POST['t1'];
	
	$sql = "update com set status = 'working' where cno IN (select e_c.cno from event join e_c on event.eno = e_c.eno where event.title = '$title');";
	
	$result = pg_query($conn, $sql);
	
	echo "<fieldset>";
	if(!$result)
		echo "NOT UPDATED";
	else
		echo "UPDATED";
	echo "</fieldset>";

	$sql1 = "select title, name, status from event, com, e_c where event.eno = e_c.eno and com.cno = e_c.cno and com.status = 'working' and title = '$title';";
	
	$result1 = pg_query($conn, $sql1);
	
	while($row = pg_fetch_array($result1))
	{
		echo "<fieldset>";
		echo "<table border = 2 align = center>";
		echo "<th>ename</th><th>cname</th><th>status</th>";
		echo "<tr>";
		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['status']."</td>";
		echo "</tr>";
		echo "</table><br>";
		echo "</fieldset>";
	}
	
	pg_close($conn);
?>
