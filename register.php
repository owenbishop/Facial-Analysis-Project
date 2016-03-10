<?php 
include_once 'dbLogin1';

$email = $_POST['email'];
$pass = $_POST['pass'];
$firstname = $_POST['forename'];
$surname = $_POST['surname'];

if($email =="" || $pass == ""){
	$error = "Not all fields completed";
}else{
	$query = "SELECT * from User WHERE Email_Address = '$email'";
	if (mysql_num_rows(queryMysql($query))){
			echo "<h4>email already exists  </h4>";
			include 'register.php';
}else{
		$query1 ="INSERT INTO User (Forename, Surname, Email_Address, UserPassword) VALUES ('$firstname', '$surname', '$email', '$pass')";
		queryMysql($query1);
		include 'login.php';
		die("<h4>Account created, please log in </h4>");
		

		
	}
}
?>

