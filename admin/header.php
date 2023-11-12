<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:3rem">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome <?php echo $name; ?></a>
  </div>
  <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit" style="margin-right:5rem"><a href="logout.php" style="text-decoration:none; color:white">Logout</a></button>
      </form>
</nav>


<nav class="nav nav-tabs" >
    <a class="nav-link" id="home-tab" data-toggle="tab" href = "home.php">Home</a>
    <a class="nav-link" id="account-tab" data-toggle="tab" href="account.php">Admin</a>
    <a class="nav-link" id="account_user-tab" data-toggle="tab" href="account_user.php">User</a>
    <a class="nav-link" id="reserve-tab" data-toggle="tab" href="reserve.php">Reservation</a>
    <a class="nav-link" id="room-tab" data-toggle="tab" href="room.php">Room</a>
    <a class="nav-link" id="income-tab" data-toggle="tab" href="income.php">Income</a>
</nav>




</body>

</html>