<?php // Example 21-7: login.php
echo "<link rel='stylesheet' type='text/css' href='facialRecognition.css'>\n";
echo "<h1>Facial Analysis Research</h1>";
include_once 'header.php';
if (!$loggedin) die();
$email = $_SESSION['email'];
$query = "SELECT UserID, Forename, Surname, Email_Address, UserPassword FROM User
            WHERE Email_Address='$email'";
			
$userdata = queryMysql($query);

$row = mysqli_fetch_assoc($userdata);

$id = $row['UserID'];
$forename = $row['Forename'];
$surname = $row['Surname'];
$Email = $row['Email_Address'];
$pass = $row['UserPassword'];


?>

<div id = "body">
		<h2>Information</h2>
			<div id = "bodyText">
				<form method="post" action="updateProfile.php">
					 Email Address:<input type="text" name="email" value="<?php echo $Email;?>"/><br/>
					 Password:<input type="text" name="pass" value="<?php echo $pass;?>"/><br/>
       				 ForeName:<input type="text" name="forename" value="<?php echo $forename;?>"/><br/>
					 SurName:<input type="text" name="surname" value="<?php echo $surname;?>"/><br/>
       				 <input type="submit" value="register" />
       			 </form>
			</div>
	</div>	
			