<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	require 'header.php';
?>


<html lang = "en">
  <head>
        <title>Admin</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>
<body>

<br />
<a class = "btn btn-success" href = "add_room.php"><i class="bi bi-plus-circle"></i> Thêm phòng</a>
				<br />
				<br />
			
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Room ID</th>
              				<th>Room Type</th>
							<th>Number Of Rooms</th>
							<th>Price</th>
							<th>Photo</th>							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `room` ");
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><?php echo $fetch['room_id']?></td>
							<td><?php echo $fetch['room_type']?></td>
              				<td><?php echo $fetch['amount']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
							
							<td><center><a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $fetch['room_id']?>"><i class="bi bi-pencil-square"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_room.php?room_id=<?php echo $fetch['room_id']?>"><i class="bi bi-x-circle"></i> Delete</a></center></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			

</body>


</html>