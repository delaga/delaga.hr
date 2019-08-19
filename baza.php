<?php
	try {
	$veza = new PDO("mysql:dbname=pausalni_obrt;host=localhost","edunova","edunova");
		
	} catch (Exception $e) {
		echo $e;
	}
?>