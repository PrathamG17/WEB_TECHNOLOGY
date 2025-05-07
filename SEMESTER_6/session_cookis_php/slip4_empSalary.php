<?php
	session_start();					//session needs to start
	
	//read from $_POST server variable
	$no = $_POST['eno'];					
	$name = $_POST['enm'];
	$address = $_POST['eadd'];
	
	//set values in server variable
	$_SESSION['ENO'] = $no;
	$_SESSION['ENAME'] = $name;
	$_SESSION['EADDRESS'] = $address;	
?>
<!--Another Form To Receive Salary Details-->
<html>
	<body>
		<form method = 'post' action = 'slip4_empFinalShow.php'>
			<h2>Enter Employee Earning Details</h2>
			<br>
			
			<b>Employee Basic : </b> <input type = 'text' name = 'ebs'>
			<br>

			<b>Employee DA : </b> <input type = 'text' name = 'eda'>
			<br>

			<b>Employee HRA : </b> <input type = 'text' name = 'ehra'>
			<br>
			
			<input type = "submit" value = "Next">
			<br>
		</form>	
	</body>
</html>
