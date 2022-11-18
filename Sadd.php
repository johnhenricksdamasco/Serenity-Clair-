<?php
	session_start();
	include_once('Sconn.php');

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$steps = $_POST['steps'];
	
		$sql = "INSERT INTO stressr (title, steps) VALUES ('$title', '$steps')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Stress reliever added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Nstress.php');
?>