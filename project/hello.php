<?php
  require('db.php');
  if(count($_POST)>0)
  {
  $id= $_GET['ID'];
  $caption = $_POST['caption'];
  $image_name = $_FILE['photo']['tmp_name'];
  
  mysqli_query($conn,"UPDATE galleryimages SET caption = '$caption', image_name='$image_name' WHERE id='$id' ";);
    $message = "Appointment Modified Successfully";
  }
  $result = mysqli_query($conn, "SELECT * FROM galleryimages WHERE id='$id' ");
  $row= mysqli_fetch_array($result);
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Save Gallery Image</title>
  </head>
  <body>
	 <div class="text-center">
    <h1 class="display-5">Update your information</h1>
  </div>
      <form method="post" action="" enctype="multipart/form-data">
	  <div><?php if(isset($message)){echo $message;} ?></div>
      <div>
        <label for="photo">Choose a photo</label>
        <input type="file" name="photo">
      </div>
      <div>
        <label for="caption">Caption: </label>
        <input type="text" name="caption">
      </div>
      <input type="submit" value="edit">
    </form>
	</body>
</html>
