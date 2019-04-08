<?php
session_start();
if(isset($_SESSION['email'])) {
	//running session let it close
	unset($_SESSION['email']);
	// change location back to login page
	header("location:login.php") ;
} else {
	header("location:login.php");
}
?>