<?php
  require('header.php');
  ?>
  <?php
  require('connect.php');
  $sql = "SELECT * FROM register_detail";
  $result = $connect->query($sql);
 ?>
  <section class="table-container">
   <div class="text-center">
     <h1 class="display-5">Appoinment details</h1>
   </div>
   <table class="table table-striped table-bordered table-hover mb-4">
     <tr class="table-info">
       <td>User Id</td>
       <td>First name</td>
       <td>Last name</td>
       <td>E-mail</td>
       <td>Contact Number</td>
       <td>City</td>
       <td>Vaccine Name</td>
       <td>Gender</td>
       <td>Time</td>
       <td>Date</td>
       <td>Update/Edit</td>
       <td>Cancel</td>
     </tr>
     <?php
       $i = 0;
       while($row = $result->fetch_assoc()){
     ?>
       <tr class="<?php if(isset($classname)) echo $classname; ?>">
         <td><?php echo $row["ID"]; ?></td>
         <td><?php echo $row["fname"]; ?></td>
         <td><?php echo $row["lname"]; ?></td>
         <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["phone"]; ?></td>
         <td><?php echo $row["city"]; ?></td>
         <td><?php echo $row["vaccine"]; ?></td>
         <td><?php echo $row["gender"]; ?></td>
         <td><?php echo $row["Vaccination_time"]; ?></td>
         <td><?php echo $row["Vaccination_date"]; ?></td>
         <td><a class="btn btn-outline-primary btn-sm" href="update-user.php?ID=<?php echo $row['ID']; ?>">UPDATE</a></td>
         <td><a class="btn btn-outline-danger btn-sm" href="delete-user.php?ID=<?php echo $row['ID']; ?>">CANCEL</a></td>
       </tr>
     <?php
       $i++;
       }
     ?>
   </table>
 </section>
<?php
  require('footer.php');
?>
