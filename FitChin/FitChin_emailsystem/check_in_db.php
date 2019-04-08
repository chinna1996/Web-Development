<?php
	
	require_once("connection2.php");
	
	if(isset($_POST['email'])) {
		
		$query ='SELECT * FROM `users` WHERE `email`= "'.$_POST['email'].'" ';
		$result = mysqli_query($con, $query) ;
		if($result) {
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_assoc($result)) {
					$email = $row['email'] ;
					
					echo '<option value="'.$email.'">';
				}
				
			} else {
				echo '<option value="no email">' ;
			}
		} else {
			echo $query;
		}
	}
?>