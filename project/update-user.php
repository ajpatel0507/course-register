<?php
  require('connect.php');
  if(count($_POST)>0){
    mysqli_query($connect,"UPDATE register_detail set ID='" . $_POST['ID'] . "',
    fname='" . $_POST['fname'] . "',
    lname='" . $_POST['lname'] . "',
    email='" . $_POST['email'] . "',
    phone='" . $_POST['phone'] . "',
    city='" . $_POST['city'] . "',
    vaccine='" . $_POST['vaccine'] . "',
    gender='" . $_POST['gender'] . "',
    Vaccination_time='" . $_POST['Vaccination_time'] . "',
    Vaccination_date='" . $_POST['Vaccination_date'] . "'
    WHERE ID='" . $_POST['ID'] . "'");
    $message = "Appointment Modified Successfully";
  }
  $result = mysqli_query($connect, "SELECT * FROM register_detail WHERE ID='" . $_GET['ID'] ."'");
  $row= mysqli_fetch_array($result);
?>
<?php require('header.php'); ?>
<section class="form-container-one">
  <div class="text-center">
    <h1 class="display-5">Update your information</h1>
  </div>
  <form name="updateUser" method="post" action="" class="main-form">
    <div><?php if(isset($message)){echo $message;} ?></div>
    <input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
    <div class="row">
      <div class="col">
        <div class="form-group mb-3">
          <label>First name</label>
          <input type="text" name="fname" class="form-control" placeholder="Your first name" required>
        </div>
      </div>
      <div class="col">
        <div class="form-group mb-3">
          <label>Last name</label>
          <input type="text" name="lname" class="form-control" placeholder="Your last name" required>
        </div>
      </div>
      <div class="form-group mb-3">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Your E-mail..." class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label>Contact Number</label>
        <input type="tel" name="phone" placeholder="Your Contact Number" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label>Your City</label>
        <input type="text" name="city" class="form-control" placeholder="Your City..." required>
      </div>
      <div class="form-group mb-3">
        <label>Preffered vaccine</label>
          <select class="form-select" name="vaccine">
            <option value="Moderna">Moderna</option>
            <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
            <option value="AstraZeneca/COVISHIELD">AstraZeneca/COVISHIELD</option>
            <option value="Janssen">Janssen</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label>Gender:</label>
          <input type="radio" name="gender" value="Male" checked>
          <label>Male</label>
          <input type="radio" name="gender" value="Female">
          <label>Female</label>
          <input type="radio" name="gender" value="Other">
          <label>Other</label>
        </div>
        <div class="form-group mb-3">
          <label>Preffered Vaccination Time: </label>
          <input type="time" min="08:00" max="16:00" name="Vaccination_time" required>
          <small class="form-text text-muted">Please choose time between 08:00AM to 04:00PM.</small>
        </div>
        <div class="form-group mb-3">
          <label>Preffered Vaccination Date: </label>
          <input type="date" min="8" max="15" name="Vaccination_date" required>
        </div>
        <input type="submit" class="btn btn-primary mb-3" value="UPDATE">
      </div>
    </form>
  </section>
<?php require('footer.php'); ?>
