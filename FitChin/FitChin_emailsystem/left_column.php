<div id="left-column-container">

		<div style="cursor:pointer" onclick="document.getElementById('Compose_Message').style.display='block'" class="Message_2">
		<p align="center">Compose Message</p>
		</div>

<?php 

	$query= 'SELECT DISTINCT `name_of_receiver`, `name_of_sender` FROM
		`pm` WHERE `name_of_sender`= "'.$_SESSION['email'].'" OR
		`name_of_receiver`= "'.$_SESSION['email'].'" ORDER BY
		`date_and_time` DESC';

	$result = mysqli_query($con, $query);
	if($result){
		
		if(mysqli_num_rows($result)>0){
			
			$counter = 0;
			$added_email = array() ;
			while($row= mysqli_fetch_assoc($result)){
				$name_of_sender= $row['name_of_sender'];
				$name_of_receiver= $row['name_of_receiver'];
				
				if($_SESSION['email'] == $name_of_sender) {
					
					if(in_array($name_of_receiver, $added_email)) {
						
					} else{
						
						?>
						<div class="back">
						<img src="img/logo.jpg " style=" float:left; margin-right:5px; width:50px; height:50px;" />
						<?php echo'<a href="?email='.$name_of_receiver.'">'.$name_of_receiver.'</a>';?>
						</div>
						<?php 
						
						$added_email = array($counter => $name_of_receiver) ;
						
						$counter++ ;
						
					}
					
				} elseif($_SESSION['email'] == $name_of_receiver) {
					
					if(in_array($name_of_sender, $added_email)) {
						
					} else{
						
						?>
						<div class="back">
						<img src="img/logo.jpg " style=" float:left; margin-right:5px; width:50px; height:50px;" />
						<?php echo '<a href="?email='.$name_of_sender.'">'.$name_of_sender.'</a>';?>
						</div>
						<?php 
						
						$added_email = array($counter => $name_of_sender) ;
						
						$counter++ ;
						
					}
					
				}
				
				
			}
			
		}else{
			echo 'no email' ;
			
		}
		
	}else {
		echo $query;
		
	}


?>



		
		


	</div>