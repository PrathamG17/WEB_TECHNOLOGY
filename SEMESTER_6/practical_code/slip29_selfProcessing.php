<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		if(isset($_GET['submit'])) 
		{
		    $no = $_GET['no'];
		    if($no > 0) 
		    {
			$prev = 0;
			$digit = 1;
			echo "Fibonacci Series : ";
			for($i = 0; $i < $no; $i++) 
			{
			    if(0 == $i) 
			    {
				echo "0 ";
			    } 
			    elseif(1 == $i) 
			    {
				echo "1 ";
			    } 
			    else 
			    {
				$sum = $digit + $prev;
				$prev = $digit;
				$digit = $sum;
				echo "$sum ";
			    }
			}
			$sum = 0;
			$temp = $no;
			while($temp != 0) 
			{
			    $reminder = $temp % 10;
			    $temp = (int)($temp / 10);
			    $sum = $sum + $reminder;
			}
			echo "<br/>Sum Of Digits : " . $sum;
		    } 
		    else 
		    {
			echo "<br/>Enter valid number.";
		    }
		} 
		else 
		{
		?>
			<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
			Enter No : <input type="text" name="no"><br/><br/>
			<input type="submit" name="submit"><br/>
			<input type="reset">
			</form>
		<?php
		}
		?>
	</body>
</html>

