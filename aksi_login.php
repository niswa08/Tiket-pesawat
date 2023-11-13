<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="angry" AND $password=="bird")
{
	$_SESSION["username"]=$username;
	header("location:index.php");
}else{
	header("location:login.php?login_error");
}
?>