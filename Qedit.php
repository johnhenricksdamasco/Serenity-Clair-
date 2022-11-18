<?php
	session_start();
	include_once('Qconnection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$quotes = $_POST['quotes'];
		$author = $_POST['author'];
		
		$sql = "UPDATE mquotes SET quotes = '$quotes', author = '$author' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Quote updated successfully';
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
		$_SESSION['error'] = 'Select quote to edit first';
	}

	header('location: Nquotes.php');

?>