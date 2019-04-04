<?php
include("check_session.php");
include("connection.php");

if(isset($_POST['btn_save']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];

mysqli_query($connection,"insert into users_personaltrainers(name, email, password, contact) values ('$name','$email','$password','$contact')")
			or die ("Query 1 is inncorrect........");
header("location: manage_personal_trainers.php");
mysqli_close($connection);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-10 " align="center">
  <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Add Personal Trainer </h1></div><br>

<form action="add_trainer.php" name="form" method="post">
<input name="name" class="input-lg" type="text"  id="name" style="font-size:18px; width:200px" placeholder="Name" autofocus required><br><br>
<input name="email" class="input-lg" type="text"  id="email" style="font-size:18px; width:200px"  placeholder="Email" required><br><br>
<input name="password" class="input-lg" type="text"  id="password" style="font-size:18px; width:200px" placeholder="Password" autofocus required><br><br>
<input name="contact" class="input-lg" type="text"  id="contact" style="font-size:18px; width:200px"  placeholder="Contact" required>
<hr>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
