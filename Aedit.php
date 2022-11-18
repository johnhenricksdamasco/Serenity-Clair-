<?php
	session_start();
	include_once('Aconn.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "UPDATE loginuser SET fullname = '$fullname', gender = '$gender', email = '$email', username = '$username', password = '$password' WHERE id = '$id'";

		//use for MySQLi OOP
		if($connect->query($sql)){
			$_SESSION['success'] = 'Data updated successfully';
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
		$_SESSION['error'] = 'Select users data to edit first';
	}

	header('location: Naccount.php');

?>