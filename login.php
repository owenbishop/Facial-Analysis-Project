<?php // Example 21-7: login.php
echo "<link rel='stylesheet' type='text/css' href='facialRecognition.css'>\n";
echo "<h1>Facial Analysis Research</h1>";
include_once 'header.php';
$error = $email = $pass = "";

if (isset($_POST['email']))
{
    $email = sanitizeString($_POST['email']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($email == "" || $pass == "")
    {
        $error = "Not all fields were entered<br />";
    }
    else
    {
        $query = "SELECT Email_Address, UserPassword FROM User
            WHERE Email_Address='$email' AND UserPassword='$pass'";

        if (mysqli_num_rows(queryMysql($query)) == 0)
        {
            $error = "<span class='error'>Username/Password
                      invalid</span><br /><br />";
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            die(header('Location: index.php'));
        }
    }
}
	
	echo <<<_END
	<div id = "body">
		<h2>Sign In</h2>
			<div id = "bodyText">
				<form method="post" action="login.php">
       				 Email:<input type="text" name="email" /><br/>
       				 Password:<input type="text" name="pass" /><br/>
       				 <input type="submit" value="register" />
       			 </form>
			</div>
	</div>
_END;
?>