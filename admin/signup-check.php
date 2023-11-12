<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$address = validate($_POST['address']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: ../signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../signup.php?error=Password is required&$user_data");
	    exit();
	}
	
	else if(empty($name)){
        header("Location: ../signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: ../signup.php?error=Email is required&$user_data");
	    exit();
	}

	else if(empty($phone)){
        header("Location: ../signup.php?error=Phone is required&$user_data");
	    exit();
	}

	else if(empty($address)){
        header("Location: ../signup.php?error=Address is required&$user_data");
	    exit();
	}

	else{

		// hashing the password
        

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name,email,phone,address) VALUES('$uname', '$pass', '$name', '$email', '$phone', '$address')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: ../signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: ../signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../signup.php");
	exit();
}