<?php
 session_start();

 if(!isset($_SESSION['username'])){
	$_SESSION['msg']="You must log in first";
	header('location:StudentHomePage.php');
 }
 if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSIION['username']);
	header("location:StudentHomePage.php");
 }
?>
