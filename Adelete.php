<?php
	session_start();
	include_once('Aconn.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM loginuser WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($connect->query($sql)){
			$_SESSION['success'] = 'User deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting the user';
		}
	}
	else{
		$_SESSION['error'] = 'Select user to delete first';
	}

	header('location: Naccount.php');
?>