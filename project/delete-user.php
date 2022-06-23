<?php
  require('connect.php');
  $sql = "DELETE FROM register_detail WHERE ID='" . $_GET["ID"] ."'";
  if(mysqli_query($connect, $sql)){
    echo "<p>Your appointment has been cancelled</p>";
    echo'<a href="index.php">Return Home</a>';
  }
  else {
    echo "<p>Error " . mysqli_error($connect) . "</p>";
  }
  mysqli_close();
?>
