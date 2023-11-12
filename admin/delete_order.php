<?php 
 require_once 'connect.php';
$oid=$_GET['booking_id'];
$conn->query("DELETE FROM `room_booking_details` WHERE `id` = '$oid'") ;
header("location: reserve.php");
?>

