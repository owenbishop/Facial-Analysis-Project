<?php
require_once 'dbLogin1.php'; 
session_start();
// try to create a connection to your MySQL database server: 
$dbserver = mysql_connect($dbhost, $dbuser, $dbpass); 


if(!$dbserver)  
{ 
    // if the connection failed, say why: 
    die("MySQL connection failed: " . mysql_error()); 
} 

// the connection succeeded, now let's try and select our database: 
$selection = mysql_select_db($dbname, $dbserver); 

if(!$selection)  
{ 
    // if the selection failed, say why: 
    die("MySQL selection failed: " . mysql_error()); 
} 

//gets the users unique email from session variable
$email = $_SESSION['email'];



//selects userid from the user table, relative to the email.
$result = mysql_query("SELECT UserID FROM User WHERE Email_Address = '$email'");

$row = mysql_fetch_assoc($result);
	
	//sets userid
	$user = $row['UserID'];
	if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
	{
		//gets image data from ajax 
		$imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
		//filteres data
		$filteredData=substr($imageData, strpos($imageData, ",")+1);
		//inserts to image table
		$sql = mysql_query("insert into Image (UserID, Image) VALUES('$user', '$filteredData')");
		$imgNo = mysql_query("Select ImageID from Image where UserID = '$user'");
		
		while($row = mysql_fetch_assoc($imgNo)){
		$imgNo1 = $row['ImageID'];
		}
		
		$png = ".png";
		$imgName = "userimage/".$email.$imgNo1.$png;
		
		$imagePath = "C:/wamp/www/updated/".$imgName;
		echo $imagePath;
		
		$imgPathQuery = mysql_query("insert into ImagePath (imagePath, UserID) VALUES('$imagePath','$user')");;
		
		$unencodedData = base64_decode($filteredData);
		$fp = fopen($imgName, 'wb');
		fwrite($fp, $unencodedData);
		fclose(fp);
		
	}












?>
