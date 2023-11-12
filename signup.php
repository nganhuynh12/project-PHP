<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="./admin/signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
               <input type="text" 
                      name="name" 
                      placeholder="Name">
                    

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name">
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password">

          <label>Email</label>
          <input type="email" 
                    name="email" 
                    placeholder="Email">

          <label>Phone</label>
          <input type="text" 
               name="phone" 
               placeholder="Phone">
     
          <label>Address</label>
          <input type="text" 
               name="address" 
               placeholder="Address">
          
          
     	<button type="submit" name="add_account_user">Sign Up</button>
          <a href="login_user.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>