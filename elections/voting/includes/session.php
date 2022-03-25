<?php
	include 'conn.php';
	session_start();

	// if(date("Y-m-d H:i:s") < "2022-03-26 00:00:00") //time to start elections
	// {
	// 	header('location: gettingready.php');
	// }

	if(isset($_SESSION['voter'])){
		$sql = "SELECT * FROM voters WHERE id = '".$_SESSION['voter']."'";
		$query = $conn->query($sql);
		$voter = $query->fetch_assoc();
	}
	else{
		header('location: index.php');
		exit();
	}


?>