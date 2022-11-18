<?php
	session_start();
	include_once('Qconnection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM mquotes WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Quote deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting quote';
		}
	}
	else{
		$_SESSION['error'] = 'Select quote to delete first';
	}

	header('location: Nquotes.php');
?>