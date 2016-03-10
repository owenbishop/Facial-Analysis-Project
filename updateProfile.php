<?php
include_once 'functions.php';

if (!$_POST['email']){
$newEmail = $_POST['email'];
$newPass = $_POST['pass'];
$newFore = $_POST['forename'];
$newSur = $_POST['surname'];

$query = "UPDATE User SET Forename = '$newFore', Surname = '$newSur', Email_Address = '$newEmail', UserPassword = '$newPass' WHERE UserID = '$id'";

queryMysql($query);
header('Location: profile.php');
}

?>