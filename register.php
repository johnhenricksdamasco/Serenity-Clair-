<?php

require "conn.php";
$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["psw"] ?? "";
$fullname = $_POST["fullname"] ?? "";
$gender = $_POST["gender"] ?? "";

/*$username = "melanatiu"; $email = "melanatiu@gmail.com"; $password = "mel123"; $fullname = "Melana Tiu"; $gender = "Female";*/
$isValidEMail = filter_var($email , FILTER_VALIDATE_EMAIL);
if($conn){
if(strlen($password ) > 40 || strlen($password ) < 6){
echo "Password length must be more than 6 and less than 40";
}
else if($isValidEMail === false){
echo "This Email is not valid";
}else{
$sqlCheckUname = "SELECT * FROM loginuser WHERE username LIKE '$username'";
$u_name_query = mysqli_query($conn, $sqlCheckUname);
$sqlCheckEmail = "SELECT * FROM loginuser WHERE email LIKE '$email'";
$email_query = mysqli_query($conn, $sqlCheckEmail);
if(mysqli_num_rows($u_name_query) > 0){
echo "User name allready used type another one";
}else if(mysqli_num_rows($email_query) > 0){
echo "This Email is allready registered";
}else{
$sql_register = "INSERT INTO loginuser (username,email,password,fullname,gender) VALUES ('$username','$email','$password','$fullname','$gender')";
if(mysqli_query($conn,$sql_register)){
echo "You are registered successfully";
}else{
echo "Failed to register you account";
}
}
}
}
else{
echo "Connection Error";
}

?>