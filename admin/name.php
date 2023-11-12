<?php
    error_reporting(0); 
    require 'connect.php';
    $query = $conn -> query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'");
    $fetch = $query->fetch_array();
    $name = $fetch['name'];
?>