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
              <a href="standard.php" class="list-group-item">Standard</a>
              <a href="superior.php" class="list-group-item">Superior</a>
              <a href="deluxe.php" class="list-group-item">Deluxe</a>
              <a href="executive_suite.php" class="list-group-item">Executive Suite</a>
              <a href="royal_suite.php" class="list-group-item">Royal Suite</a>
            </div>

          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-9">
            <div class="row">
            <?php
              $sql_room = "SELECT * FROM `room` WHERE `room_type` LIKE '%Royal Suite%'";
              $run = mysqli_query($conn , $sql_room);
              while($row = $run->fetch_array(MYSQLI_ASSOC)){
                $id = $row['room_id'];
                $room_type = $row['room_type'];
                $amount = $row['amount'];
                $price = $row['price'];
                $photo = $row['photo'];

                echo '
                <div class="col-lg-6 col-md-5 mb-5">
                <div class="card h-100" >
                  <a href=""><img style="height:350px" class="card-img-top" src="photo/'.$photo.'" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="">'.$room_type.'</a>
                    </h4>
                    <p>Diện tích khác nhau từ 27- 37m2 phù hợp với nhiều nhu cầu của khách hàng. 
                    Hệ thống trang thiết bị hiện đại, điều hòa, tivi màn hình led, sofa sang trọng, 
                    wifi tiện ích và các các dịch vụ đưa đón khách tham quan các điểm du lịch. </p>

                   <h5 style="color: #f47442"> Giá: '.$price.' VND</h5>
                 
                
                  </div>
                  <div class="card-footer">
                    <a href="form_booking.php?id='.$id.'" style="color: white;" class="btn btn-primary">Add to cart</a>
                  </div>
                </div>
              </div>
                ';
              }
            ?>
            </div>
          </div>
          <!-- /.col-lg-9 -->

        </div>
<!-- /.row -->

        </div>
    </div>
  
 

</body>


</html>
