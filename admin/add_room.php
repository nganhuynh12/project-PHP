<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	require 'header.php';
?>
<html lang = "en">

<body>
	
	<br />

				<div class = "col-md-4" style="margin-left:20rem">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label for = "name">Room ID</label>
                            <input type = "text" class = "form-control" name = "room_id"   required = "required">
						</div>
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard">Phòng Standard</option>
								<option value = "Superior">Phòng Superior</option>
								<option value = "Deluxe">Phòng Deluxe</option>
								<option value = "Executive Suite">Phòng Executive Suite</option>                                                        
                                <option value = "Royal Suite">Phòng Royal Suite</option>
							</select>
						</div>
                        <br>
                        <div class = "form-group">
							<label>Number Of Rooms</label>
							<input type = "text"  class = "form-control" name = "amount" required = "required"/>
						</div>
                        <br>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" class = "form-control" name = "price" required = "required"/>
						</div>
                        <br>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						
						<br>
						<div class = "form-group">
							<button name = "add_room" class = "btn btn-info form-control"> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_room.php'?>
				</div>
			
	
</body>

<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>