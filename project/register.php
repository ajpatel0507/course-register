<?php
  require('header.php');
  require('connect.php');
?>
  <section class="form-container">
    <form action="process-register.php" method="post" class="main-form">
      <h3>Register for Vaccination</h3>
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
          <input type="submit" class="btn btn-primary mb-3" value="Register">
        </div>
      </form>
    </section>
<?php
  require('footer.php');
?>
