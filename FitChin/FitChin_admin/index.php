<?php
include("check_session.php");
include("connection.php");
$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FitChin Admin Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<!-- jquery library -->
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified javascript -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<style>
body {
background-image: url("img/background.jpg");
background-position: 100;
background-repeat: repeat;
background-size: cover;
}
</style>

   	 <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>

	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Welcome  </h1></div><br>
	<div class="panel-body">
		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
</div></div></div>
<?php include("include/js.php"); ?>

<br><br> <br><br><br><br>
<footer class="footer">
   <div class="container">
   <center>
        <p>Copyright &copy FitChin. All Rights Reserved.</p>

   </center>
   </div>
</footer>
</body>
</html>
