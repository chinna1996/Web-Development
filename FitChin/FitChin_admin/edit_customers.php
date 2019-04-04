<?php
include("check_session.php");
include("connection.php");

$id=$_REQUEST['id'];

$result=mysqli_query($connection,"select id, name, email, password, contact, city, address from users where id='$id'")or die ("query 1 incorrect.......");

list($id,$name,$email,$password,$contact,$city,$address)=mysqli_fetch_array($result);

if(isset($_POST['btn_save']))
{
$name=$_POST['name'];
$password=$_POST['password'];

mysqli_query($connection,"update users set name='$name', password='$password' where id='$id'")or die("Query 2 is inncorrect..........");

header("location: manage_customers.php");
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
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>

	<div class="col-md-10 content" align="center">
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Edit User Details </h1></div><br>
<form action="edit_customers.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
<label style="font-size:18px;">Email</label>
<br>
<input class="input-lg" style="font-size:18px; width:200px" name="name" type="text"  id="name" value="<?php echo $email; ?>" autofocus><br><br>
<label style="font-size:18px;">Password</label>
<br>
<input class="input-lg" style="font-size:18px; width:200px" name="password" type="text"  id="password" value="<?php echo $password; ?>">
<br><br>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>
