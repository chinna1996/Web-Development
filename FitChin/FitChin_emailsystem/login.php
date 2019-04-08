<?php 
session_start();
require_once ("connection2.php"); 
?>

<!DOCTYPE html>
<html>
<style>
</style>
<body>
	<h1 align="center">Login</h1>
	<div id="container">
	<form method="post">
	<center>
		<input type="text" class="input" placeholder="email" name="email" /></br>
		<input type="password" class="input" placeholder="password" name="password" /></br>
		<input type="submit" value="login" name="login" /></br>
	</form>
	</center>
	</div>
	
	<?php
		if(isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$query= 'SELECT * FROM `users` WHERE `email`="'.$email.'"
			AND `password`="'.$password.'"';
			
			
			
			$result=mysqli_query($con, $query);
			if($result) {
				if(mysqli_num_rows($result)>0) {
					//Logged in
					$_SESSION['email'] = $email ;
					header("location:index.php");
					
				}else{
					//Login unsuccessful
					echo 'Your email and password are incorrect';
				}
				
				} else {
					//incorrect
					echo $query;
				}
			}
				?>
			
		
</body>
</html>