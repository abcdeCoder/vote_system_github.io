<?php
	$conn = new mysqli('lbkcZg4Gn6', 'remotemysql.com', '57yUQFULYx', 'lbkcZg4Gn6');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>