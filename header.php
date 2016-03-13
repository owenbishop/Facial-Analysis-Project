<?php // Example 21-2: header.php
echo("<link href='http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>");
echo("<script src='http://code.jquery.com/jquery-1.10.2.js'></script>");
echo("<script src='http://code.jquery.com/ui/1.10.4/jquery-ui.js'></script>");
echo("<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>");
echo("<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>");
echo("<link rel='stylesheet' type='text/css' href='facialRecognition.css'>");
session_start();
include 'functions.php';
$userstr = ' (Guest)';

if (isset($_SESSION['email']))
{
    $user     = $_SESSION['email'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
}
else $loggedin = FALSE;


if ($loggedin)
{
    echo "<div id = 'menu'>".
		"<ul>" .
         "<li><a href='aboutUs.php'>About Us</a></li>" .
         "<li><a href='takePhoto.html'>Take Photo</a></li>" .
         "<li><a href='profile.php'>Profile</a></li>" .
		 "<li><a href='results.php'>Analysis Results</a></li>" .
         "<li><a href='logOut.php'>Log Out</a></li></ul></div>";
		 
}
else
{
    echo <<<_END
	<div id = "menu">
		<ul>
  			<li><a href="aboutUs.php">About</a></li>
 			 <li><a href="register.html">Register</a></li>
 			 <li><a href="login.php">Sign In</a></li>
  			<li><a href="adminLogIn.php">Admin Sign In</a></li>
		</ul>
	</div>
_END;
}
?>
