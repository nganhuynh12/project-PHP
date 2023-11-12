<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
  require 'header.php';
?>
<html lang = "en">
 
<body>
	



<?php
    $query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'");
    $fetch = $query->fetch_array();
?>
<br />
<div class = "col-md-4" style="margin-left:20rem">	
    <form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
        <div class = "form-group">
            <label>Name </label>
            <input type = "text" class = "form-control" value = "<?php echo $fetch['name']?>" name = "name" />
        </div>
        <br>
        <div class = "form-group">
            <label>Username </label>
            <input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
        </div>
        <br>
        <div class = "form-group">
            <label>Password </label>
            <input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
        </div>
        <br />
        <div class = "form-group">
            <button name = "edit_account" class = "btn btn-warning form-control"></i> Save Changes</button>
        </div>
    </form>
</div>
	
</body>

</html>