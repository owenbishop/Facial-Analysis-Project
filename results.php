<?php
require_once 'dbLogin1.php'; 
echo("<link rel='stylesheet' type='text/css' href='facialRecognition.css'>");
echo "<h1>Facial Analysis Research</h1>";
include_once 'header.php';

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

//gets the users unique email from session variable
$email = $_SESSION['email'];

$result = mysqli_query($dbserver, "SELECT UserID FROM User WHERE Email_Address = '$email'");

$row = mysqli_fetch_assoc($result);
	
	//sets userid
	$user = $row['UserID'];
	
	$imagePathQuery = mysqli_query($dbserver, "SELECT path FROM result WHERE user = '$email'");
	while($row = mysqli_fetch_assoc($imagePathQuery)){
		$imgPath = $row['path'];
		echo "<img src = '$imgPath'/>";
		}
		

		
		