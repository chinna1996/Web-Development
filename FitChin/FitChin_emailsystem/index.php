<?php
session_start();
	if(isset($_SESSION['email'])) {
		
		//echo 'Welcome to FitChin email system '.$_SESSION['email'];
		
	
		
?>

<link rel="stylesheet" href="css/style.css" type="text/css">
<!DOCTYPE html>
<html>
<style>


	.back{
	border:1px solid black;
	padding:5px; 
	background:#efefef;
	margin: 0px auto;
	margin-top: 2px;
	overflow:auto;


}

#pm-container{
	height:85%;
	border:1px solid black;
	overflow: auto;
	
}

.textarea {
	width:100%;
	height: 10%;
	position: absolute;
	margin: 0px auto;
	
	
}

.Message_1, .Message_2 {
	border: 1px solid black;
	width: 100%;
	padding: 5px;
	margin: 0px auto;
	margin-top: 2px;
	overflow:auto;
}

.Message_1 {
	background: #efefef;
}

#Compose_Message{
	display:none;
	box-shadow:2px 10px 30px #000000;
	width:500px;
	position:fixed; 
	top:10%;
	background: #ffffff;
	z-index:2;
	left:50%;
	transform: translate(-50%, 0);
	border-radius:5px;
}
.pm-top, .pm-bottom{
	background:#233070;
	margin:0px;
	color: #ffffff;
	padding:5px;
}
.pm-top{
	font-size:20px;
	text-align:center;
}

.pm-body{
	padding: 5px;
}
.pm-input{
	width:100%;
}

</style>
<body>

<?php require_once("compose_message.php");?>

<div id="container">
	<div id="menu">
	<?php echo $_SESSION['email'];
		  echo '<a style="float:right" href="logout.php">Log out</a>';
	?>
	</div>
	
	<div id="left-column">
	<?php require_once("left_column.php");?>
	
	</div>
	
	<div id="right-column">
	
		<?php require_once("right_column.php");?>
	
	</div>
	
</body>
</html>
		
<?php
	}else{
		header("location:login.php");
	}
		
	

?>