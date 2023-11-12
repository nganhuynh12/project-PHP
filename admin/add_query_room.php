<?php
if(isset($_POST['add_room'])){
    $room_id = $_POST['room_id'];
    $room_type = $_POST['room_type'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
 
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $photo_name = addslashes($_FILES['photo']['name']);
    $photo_size = getimagesize($_FILES['photo']['tmp_name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
    $conn->query("INSERT INTO `room` (room_id,room_type,amount, price, photo) VALUES('$room_id','$room_type', '$amount','$price', '$photo_name')");
    header("location: room.php");
}
?>