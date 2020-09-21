<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
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
              
          </div>
        </div><br>
      </div>

</div>