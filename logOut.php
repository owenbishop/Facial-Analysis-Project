<?php // Example 21-12: logout.php
include_once 'header.php';

if (isset($_SESSION['email']))
{
    session_destroy();
	
   header('Location: index.php');
}
else echo "You cannot log out because you are not logged in";
?>


