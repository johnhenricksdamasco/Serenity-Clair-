<?php
	session_start();
	include_once('Sconn.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM stressr WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Stress reliever deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting stress reliever';
		}
	}
	else{
		$_SESSION['error'] = 'Select stress reliever to delete first';
	}

	header('location: Nstress.php');
?>