<?php
	//$conn = new mysqli('localhost', 'root', '', 'votesystem');

	$conn = new mysqli('localhost', 'timescom_2timesestore', '', 'timescom_votesystem');

	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>