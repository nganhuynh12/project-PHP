<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
    require 'header.php';
?>
<html lang = "en">
   
<body>
	

	<br />
    <br />
				<div class = "col-md-4" style="margin-left:20rem">	
					<form method = "POST">
						<div class = "form-group">
							<label>Name </label>
							<input type = "text" class = "form-control" name = "name" required = "required" />
						</div>
                        <br />
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" name = "username" required = "required"/>
						</div>
                        <br />
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" name = "password" required = "required"/>
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control">Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_account.php'?>
		
	</div>
	
</body>

</html>