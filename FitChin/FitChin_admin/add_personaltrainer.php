<?php
include("check_session.php");
include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];




mysqli_query($connection,"insert into personaltrainers (id, name, email, contact) values ('$id','$name','$email','$contact')") or die ("query incorrect");

 header("location: submit_form2.php?success=1");

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

   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span> Add Personal Trainer </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_personaltrainer.php" method="post" name="form" enctype="multipart/form-data">
        <p>Name</p>
        <input class="input-lg thumbnail form-control" type="text" name="name" id="name" autofocus style="width:100%" placeholder="Personal Trainer name" required>
				<p>Email</p>
				<input class="input-lg thumbnail form-control" type="text" name="email" id="email" autofocus style="width:100%" placeholder="Personal Trainer email" required>
				<p>Contact</p>
				<input class="input-lg thumbnail form-control" type="text" name="contact" id="contact" autofocus style="width:100%" placeholder="Personal Trainer contact" required>

</div>
<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Personal Trainer</button>
    </div>
        </div>



        </form>

	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>
