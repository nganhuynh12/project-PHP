<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
  	require 'header.php';
	
	
if(isset($_POST['add_account_user'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
   
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
    $query = $conn->query("SELECT * FROM `users` WHERE `username` = '$username'") ;
	$valid = $conn->num_rows;
    if($valid > 0){
        echo "<center><label style = 'color:red;'>Username already taken</center></label>";
    }else{
        $conn->query("INSERT INTO `users` (name, username, password,email,phone,adress) VALUES('$name', '$username', '$password', '$email', '$phone', '$address')");
        header("location:account_user.php");
    }
}

?>
<html lang = "en">
  
<body>

<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<br>
				
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>							
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `users`") ;
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['user_name']?></td>							
							<td><?php echo $fetch['email']?></td>
							<td><?php echo $fetch['phone']?></td>
							<td><?php echo $fetch['address']?></td>
							<td><center> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_account_user.php?id=<?php echo $fetch['id']?>"><i class="bi bi-x-circle"></i> Delete</a></center></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>