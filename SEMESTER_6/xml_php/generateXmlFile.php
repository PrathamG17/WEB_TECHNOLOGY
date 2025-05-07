<?php
	
	$str = <<<XML
			<?xml version ="1.0" encoding="UTF-8"?>
			<bookstore>
				<books>
					<php>
						<title>PROGRAMMING IN PHP</title>
						<publication>O'RELLY</publication>
					</php>
					<php>
						<title>BEGINNER PHP</title>
						<publication>PEARSON</publication>
					</php>
					<c>
						<title>Let Us C</title>
						<publication>BPB PUBLICATION</publication>
					</c>
					<web>
						<title>WEB DEVELOPMENT</title>
						<publication>katson books</publication>
					</web>
					<webServices>
						<title>RESTFUL WEB SERVICES COOKBOOK</title>
						<publication>O'RELLY</publication>
					</webServices>
				</books>
			</bookstore>
			XML;
			  
	$fname = "bookstore.xml";
	
	$fp = fopen($fname, "w");
	
	fwrite($fp, $str);
	
	fclose($fp);
	
	echo("FILE CREATED : ");
	echo($fname);
?>
