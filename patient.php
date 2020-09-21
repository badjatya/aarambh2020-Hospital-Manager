<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="color: black" id="ab1"></div>
   <div class="container-fluid" style="margin-top:50px;">
   <div class="container-fluid">
          <div class="card">
            <div class="card-body" id="final" style="background-color:#3498D8;color:#ffffff;">
            <a href="admin-panel.php" class="btn btn-light">Go Back</a>
              <center><h4>Patient Details</h4></center><br>
              
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Contact Details</th>
      <th scope="col">Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
    <?php  get_patient_details(); ?>
    
  </tbody>
</table>

</body>
</html>