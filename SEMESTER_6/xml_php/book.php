<?php
	$xml = simplexml_load_file("book.xml") or die("ERROR : CANNOT CREATE OBJECT");
	var_dump($xml);
?>
