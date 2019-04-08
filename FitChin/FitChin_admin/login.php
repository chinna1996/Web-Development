<?php
session_start();
//session_regenerate_id(true);
include("connection.php");
$check=0;

if(isset($_POST['submit']))
{
$username = $_POST['user_name'];
$password = $_POST['password'];

$query=mysqli_query($connection,"select user_id from admin_login where user_name='$username' and user_password='$password'")or die ("query 1 incorrect.......");

list($user_id)=mysqli_fetch_array($query);

$_SESSION['user_id']=$user_id;
header("location: index.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<title>FitChin Admin</title>


</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<!-- jquery library -->
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified javascript -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- External CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
body {
background-image: url("img/background.jpg");
background-position: 100;
background-repeat: repeat;
background-size: cover;
}
</style>
<div class="container page-header well" align="center">
<img src="img/admin.png">
<h1 align="center">Welcome &nbsp;&nbsp;
Admin Login</h1>
<div align="center">
<form action="login.php" method="post" id="login" name="login" enctype="multipart/form-data">
<div class="form-group">
<input type="text" style="font-size:18px; width:200px" class="input-lg" name="user_name" id="user_name" placeholder="User-Name" required autofocus>
</div>
<div class="form-group">
<input type="password" class="input-lg" name="password" style="font-size:18px; width:200px" id="password" placeholder="Password" required>
 </div>
 <div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>
</div>

</form>
</div>
</div>

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
