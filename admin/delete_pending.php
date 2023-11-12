<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `transaction` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") ;
	header("location:reserve.php");
?>