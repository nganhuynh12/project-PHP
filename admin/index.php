<!DOCTYPE html>
<?php require_once "connect.php"?>
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
	<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
	}
	body{
	background: #1abc9c;
	overflow: hidden;
	}

	.container{
	max-width: 440px;
	padding: 0 20px;
	margin: 170px auto;
	}
	.wrapper{
	width: 100%;
	background: #fff;
	border-radius: 5px;
	box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
	}
	.wrapper .title{
	height: 90px;
	background: #16a085;
	border-radius: 5px 5px 0 0;
	color: #fff;
	font-size: 30px;
	font-weight: 600;
	display: flex;
	align-items: center;
	justify-content: center;
	}
	.wrapper form{
	padding: 30px 25px 25px 25px;
	}

	</style>
	
	<div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Admin</span></div>
        <form  method = "POST">
		<div class = "form-group">
			<label>Username</label>
			<input type = "text" name = "username" class = "form-control" required = "required" />
		</div>
		<br>
		<div class = "form-group">
			<label>Password</label>
			<input type = "password" name = "password" class = "form-control" required = "required" />
		</div>
		<br>
		<div class = "form-group">
			<button name = "login" class = "form-control btn btn-primary"> Login</button>
		</div>
        </form>
		<?php require_once 'login.php'?>
      </div>
    </div>
</body>
</html>



