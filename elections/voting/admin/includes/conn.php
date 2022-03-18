<?php
	if (is_file(__DIR__ . "/LOCAL.DEV")) {
		$conn = new mysqli('localhost', 'root', '', 'votesystem');
	} else {
		$conn = new mysqli('localhost', 'timescom_2timesestore', 'X0QdrbN$Uqk+', 'timescom_votesystem');
	}
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>