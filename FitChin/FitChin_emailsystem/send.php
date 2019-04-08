<?php

session_start();
require_once("connection2.php");
if(isset($_SESSION['email']) and isset ($_GET['email'])){
	if(isset($_POST['text'])) {
		if($_POST['text'] !==''){
			
			$name_of_sender = $_SESSION['email'];
			$name_of_receiver = $_GET['email'];
			$pm = $_POST['text'];
			$date = date("Y-m-d h:i:sa");		
			
		$query = 'INSERT INTO `pm`
		(`id`, `name_of_sender`, `name_of_receiver`, `pm_text`, `date_and_time`)
		VALUES("", "'.$name_of_sender.'", "'.$name_of_receiver.'", "'.$pm.'", "'.$date.'" )';
		
		$result = mysqli_query($con, $query) ;
		
		if($result) {
				?>
									<div class="message_1">
									<a href='#'>Myself</a>
									<p><?php echo $pm; ?></p>
									</div>	
						<?php
			
		}else {
			echo $query;
			
		}
			
			
		}else{
			echo 'enter pm';
		}
		
		
	}else {
		echo 'a problem has encountered';
		
	}
	

}else {
		echo 'Login or select email to send a pm';
	}


?>


