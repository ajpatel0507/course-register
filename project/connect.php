<?php
  // Create a variable for connection information
  $conn = new mysqli('172.31.22.43','Akshay200463135','ZVF3fQ6zYR','Akshay200463135');
  //if statement to make sure that connection working
  if ($connect === false){
    die("could not connect. " . $conn->connect_error);
  }
?>
