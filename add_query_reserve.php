<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_guest'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
		$checkin = $_POST['date'];
		$conn->query("INSERT INTO `guest`( `name`, `phone`, `email`, `address`) VALUES('$name', '$address',  '$email', '$phone')") ;
		$query = $conn->query("SELECT * FROM `guest` WHERE email= '$email'") ;
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") ;
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") ;
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
					
							$room_id = $_REQUEST['room_id'];
							$guest_id = $fetch['guest_id'];
							$conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin) VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") ;
					
					
						
						
				}	
			}	
	}	
?>