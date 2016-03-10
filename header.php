<?php // Example 21-2: header.php
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
