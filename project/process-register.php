<?php
  $formOk = true;
  if(empty($_POST['fname'])){
    echo "<p>First name is required</p>";
    $formOk = false;
  }
  if(empty($_POST['lname'])){
    echo "<p>Last name is required</p>";
    $formOk = false;
  }
  if(empty($_POST['email'])){
    echo "<p>email is required</p>";
    $formOk = false;
  }
  if(empty($_POST['phone'])){
    echo "<p>contact number is required</p>";
    $formOk = false;
  }
  if(empty($_POST['city'])){
    echo "<p>city is required</p>";
    $formOk = false;
  }
  if(empty($_POST['vaccine'])){
    echo "<p>vaccine name is required</p>";
    $formOk = false;
  }
  if(empty($_POST['gender'])){
    echo "<p>gender required</p>";
    $formOk = false;
  }
  if(empty($_POST['Vaccination_time'])){
    echo "<p>time is required</p>";
    $formOk = false;
  }
  if(empty($_POST['Vaccination_date'])){
    echo "<p>date is required</p>";
    $formOk = false;
  }
  if($formOk == true){
    require('connect.php');
    $sql = "INSERT INTO register_detail (fname, lname, email, phone, city, vaccine, gender, Vaccination_time, Vaccination_date) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[phone]', '$_POST[city]', '$_POST[vaccine]', '$_POST[gender]', '$_POST[Vaccination_time]', '$_POST[Vaccination_date]')";
    mysqli_query($connect, $sql);
    echo'<p>Appoinment successful</P>';
    echo'<a href="index.php">Return Home</a>';
    mysqli_close();
  }
?>
