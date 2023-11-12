<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_room'])){
		$room_id = $_POST['room_id'];
		$room_type = $_POST['room_type'];
        $amount = $_POST['amount'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `room` SET `room_id`='$room_id',`room_type`='$room_type',`amount`='$amount',`price`='$price',`photo`='$photo_name' WHERE `room_id` = '$_REQUEST[room_id]'") ;
		header("location: room.php");
	}
?>