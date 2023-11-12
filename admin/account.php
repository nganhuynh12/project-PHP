<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	require 'header.php';
?>
<html lang = "en">

<body>


<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<br>
				<a class = "btn btn-success" href = "add_account.php"> <i class="bi bi-plus-circle"></i>Tạo tài khoản mới</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `admin`") ;
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['username']?></td>
							<td><?php echo md5($fetch['password'])?></td>
							<td><center><a class = "btn btn-warning" href = "edit_account.php?admin_id=<?php echo $fetch['admin_id']?>"> <i class="bi bi-pencil-square"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_account.php?admin_id=<?php echo $fetch['admin_id']?>"><i class="bi bi-x-circle"></i> Delete</a></center></td>
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