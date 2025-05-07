<?php
	if(isset($_COOKIE['count']))
		$count = $_COOKIE['count'];
	else
		$count = 0;
		$count++;
		setcookie('count', $count);
	
	echo "<h4>This Page Is Accessed $count Times.</h4>";
?>
