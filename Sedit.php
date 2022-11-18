<?php
	session_start();
	include_once('Sconn.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$steps = $_POST['steps'];
		
		
		$sql = "UPDATE stressr SET title = '$title', steps = '$steps' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Stress Reliever updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating ';
		}
	}
	else{
		$_SESSION['error'] = 'Select Meditation to edit first';
	}

	header('location: Nstress.php');

?>