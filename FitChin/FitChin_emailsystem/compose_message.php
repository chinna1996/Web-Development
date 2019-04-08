	<div id="Compose_Message">
	<p class="pm-top">Compose Message</p>
	<p class="pm-body">
		<form align="center" method="post">
			<input type="text" list="email" onkeyup="check_in_db()" 
				   class="pm-input" placeholder="email" 
				   name="email" id="email" /><br><br>
				   
			<datalist id="email"></datalist>
			
			<br><br>
			<textarea class="pm-input" name="pm" placeholder="Compose Message"></textarea><br><br>
			<input type="submit" value="Send" id="send" name="send" />
			<button onclick="document.getElementById('Compose_Message').style.display='none'">Cancel</button>
			</form>
	</p>
	<p class="pm-bottom">Send</p>
	</div>
	
	<?php 
	require_once("connection2.php") ;
	if(isset($_POST['send'])) {
		$name_of_sender = $_SESSION['email'] ;
		$name_of_receiver = $_POST['email'] ;
		$pm = $_POST['pm'];
		$date = date("Y-m-d h:i:sa");
		
		
		$query = 'INSERT INTO `pm`
		(`id`, `name_of_sender`, `name_of_receiver`, `pm_text`, `date_and_time`)
		VALUES("", "'.$name_of_sender.'", "'.$name_of_receiver.'", "'.$pm.'", "'.$date.'" )';
		
		$result = mysqli_query($con, $query) ;
		if($result){
			header("location:index.php?email=".$name_of_receiver);
			
		} else {
			echo $query;
		}
		
	}
	?>
	
	<script src="js/jquery-3.2.1.min.js"></script>
	
	<script>
	
		document.getElementById("send").disabled = true;
		function check_in_db() {
			var email = document.getElementById("email").value ;
			
			$.post("check_in_db.php",
			{
				email: email
			},
			
			function(data, status) {
				//alert(data) ;
				if(data == '<option value="no email">'){
					document.getElementById("send").disabled = true;
				} else{
					document.getElementById("send").disabled = false;
				} 
			}
			);
		}
	</script>