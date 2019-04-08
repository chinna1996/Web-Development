


<div id="right-column-container">
		<div id="pm-container">
		
		<?php
		
				$no_pm = false;
		
				if(isset($_GET['email'])) {
					$_GET['email'] = $_GET['email'] ;
				} else {
					
					$query='SELECT `name_of_sender`, `name_of_receiver` FROM `pm`
					WHERE `name_of_sender` = "'.$_SESSION['email'].'" OR
					`name_of_receiver` = "'.$_SESSION['email'].'" ORDER BY
					`date_and_time` DESC LIMIT';
					
					$result = mysqli_query($con, $query) ;
					if($result) {
						if(mysqli_num_rows($result)>0) {
							while($row=mysqli_fetch_assoc($result)) {
								$name_of_sender = $row['name_of_sender'];
								$name_of_receiver = $row['name_of_receiver'];
								
								if($_SESSION['email'] == $name_of_sender) {
									$_GET['email'] = $name_of_receiver;
								} else{
									$_GET['email'] = $name_of_sender;
								}
							}
						
					}else{
						echo 'no messages';
						
						$no_pm = true;
						
					}
				} else{ 
					$query;
				}
				}
		
		if($no_pm == false) {
		if(isset($_GET['email'])) {
		$query='SELECT * FROM `pm` WHERE
				`name_of_sender` = "'.$_SESSION['email'].'"
				AND `name_of_receiver` = "'.$_GET['email'].'"
				OR
				`name_of_sender` = "'.$_GET['email'].'"
				AND `name_of_receiver` = "'.$_SESSION['email'].'" ';
				
			$result= mysqli_query($con, $query) ;
			
			if($result){
				
				while($row = mysqli_fetch_assoc($result)){
					$name_of_sender = $row['name_of_sender'] ;
					$name_of_receiver = $row['name_of_receiver'];
					$pm = $row['pm_text'] ;
					
					
					if($name_of_sender == $_SESSION['email']){
						
						?>
									<div class="message_1">
									<a href='#'>Myself</a>
									<p><?php echo $pm; ?></p>
									</div>	
						<?php 
						
					} else {
						
						?>
										<div class="message_2">
										<a href='#'><?php echo $name_of_sender; ?></a>
										<p><?php echo $pm; ?></p>
										</div>
						
						<?php
						
					}
					
				}
				
				} else {
					echo $query;
				
		}}}
		
		
		?>
							
				
		
		
		</div>
		<form method="post" id="pm-form">
		<textarea class="textarea" id="pm_text" placeholder="Compose message"></textarea>
		</form>
	</div>
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script>
	
	$("document").ready(function(event) {
		
		$("#right-column-container").on('submit', '#pm-form', function(){
			
				var pm_text = $("#pm_text").val();
				
				$.post("send.php?email=<?php echo $_GET['email'];?>", 
				{
					text: pm_text,
				
		},
		
		function(data, status) {
			
			
			
		$("#pm_text").val("");
		
		document.getElementById("pm-container").innerHTML += data;
			
		}
		
		
		
		);
		
		
	});
		
		
		
		
		$("#right-column-container").keypress(function(e) {
			if(e.keyCode == 13 && !e.shiftKey) {
				$("#pm-form").submit();
				
			}
			
			
		});
		
		
		
	});
	</script>
	
	