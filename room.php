<?php
require "connect.php"; 
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
        <title>Admin</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        
        <style>
    .list-group-item{
      color: black;
      text-decoration: underline;
      font-weight: bold;
    }
    .list-group{
      border: 1px solid black;
      border-radius: 6px;
    }
  </style>

    </head>
<body>


<div class="display">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h1 class="my-4">Room Type</h1>
            <div class="list-group">
            <a href="room.php" class="list-group-item">Room</a>
              <a href="standard.php" class="list-group-item">standard</a>
              <a href="superior.php" class="list-group-item">Superior</a>
              <a href="deluxe.php" class="list-group-item">Deluxe</a>
              <a href="executive_suite.php" class="list-group-item">Executive Suite</a>
              <a href="royal_suite.php" class="list-group-item">Royal Suite</a>
            </div>
          </div>
          <!-- /.col-lg-3 -->

          <div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") ;
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: ".$fetch['price'].""?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
          <!-- /.col-lg-9 -->

        </div>
<!-- /.row -->

        </div>
    </div>
  
 

</body>


</html>
