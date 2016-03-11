<?php 
// read in the variables from our login file: 
require_once 'dbLogin1.php';
// try to create a connection to your MySQL database server: 
$dbserver = mysqli_connect($dbhost, $dbuser, $dbpass); 


if(!$dbserver)  
{ 
    // if the connection failed, say why: 
    die("MySQL connection failed: " . mysqli_error()); 
} 

// the connection succeeded, now let's try and select our database: 
$selection = mysqli_select_db($dbserver, $dbname); 

if(!$selection)  
{ 
    // if the selection failed, say why: 
    die("MySQL selection failed: " . mysqli_error()); 
} 
$email = $_POST['email'];
$pass = $_POST['pass'];
$firstname = $_POST['forename'];
$surname = $_POST['surname'];
$date = $_POST['date'];
$gender = $_POST['gender'];
echo $date;

if($email =="" || $pass == ""){
	$error = "Not all fields completed";
}else{
	if (mysqli_num_rows(mysqli_query($dbserver, "SELECT * from User WHERE Email_Address = '$email'"))){
			echo "<h4>email already exists  </h4>";
			include 'register.html';
}else{
		$query = mysqli_query($dbserver, "INSERT INTO User (Forename, Surname, Email_Address, UserPassword, Date_Of_Birth, gender) VALUES ('$firstname', '$surname', '$email', '$pass', '$date', '$gender')");
		include 'login.php';
		die("<h4>Account created, please log in </h4>");
		

		
	}
}
?>