<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `users` WHERE `id` = '$_REQUEST[id]'") ;
	 header("location: account_user.php");
?>