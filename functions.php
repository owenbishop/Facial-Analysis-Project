<?php 

function queryMysql($query)
{
	$dbhost  = 'localhost'; 
	$dbname  = 'project'; 
	$dbuser  = 'root'; 
	$dbpass  = '';
	
	$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die(mysqli_error());
	mysqli_select_db($con, $dbname) or die(mysqli_error());
	
    $result = mysqli_query($con, $query) or die(mysqli_error());
	 return $result;
}

function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $var;
}
