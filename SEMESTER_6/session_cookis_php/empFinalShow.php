<?php
	session_start();
	
	$basic = $_POST['ebs'];					
	$da = $_POST['eda'];
	$hra = $_POST['ehra'];
	
	echo "<center><h3>EMPLOYEE DETAILS</h3></center><br>";
	
	echo "<center>EMPLOYEE NUMBER : ".$_SESSION['ENO']."</center><br>";
	echo "<center>EMPLOYEE NAME : ".$_SESSION['ENAME']."</center><br>";
	echo "<center>EMPLOYEE ADDRESS : ".$_SESSION['EADDRESS']."</center><br>";
	
	echo "<center>EMPLOYEE BASIC SALARY : ".$basic."</center><br>";
	echo "<center>EMPLOYEE DAILY ALLOWANCE : ".$da."</center><br>";
	echo "<center>EMPLOYEE HOUSE RENT ALLOWANCE : ".$hra."</center><br>";
	
	$total = $basic + $da + $hra;
	echo "<center><h2>TOTAL SALARY : ".$total."</h2></center>";
?>
