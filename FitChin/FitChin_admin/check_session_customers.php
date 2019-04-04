<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['id']!="")
{}
else
{
   header("location: login.php");
}

$inactive=1000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location:logout.php");
	}
}
$_SESSION['timeout']=time();
?>
