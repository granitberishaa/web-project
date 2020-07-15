<?php
	$DB_SERVER = "localhost:3307";
	$DB_USER = "root";
	$DB_PASSWORD = "123456";
	$DB_DATABASE = "webproject";
	$connection = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE) or die("Unable to connect");
?>