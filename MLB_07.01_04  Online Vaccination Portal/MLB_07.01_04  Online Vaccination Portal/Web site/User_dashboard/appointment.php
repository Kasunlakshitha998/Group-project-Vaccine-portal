<?php include 'Include/header.php' ?>

    <div class="layout-content">
      <form class="form" action="appoinment_process.php" method="POST">
        <h2>Appointment</h2>
        <h6>Book your appointment here!</h6>
        <div class="form-wrapper">
          <div class="left-panel">
            <div class="form-control">
              <label>Patient Name</label><br>
              <br><input name="name" id="patientName" class="select3" placeholder="ex-Chris Danile" ><br>
            </div>
            <div class="form-control">
              <label>Contact No</label><br>
            <br>  <input name="number" id="contactNo" class="select3" placeholder="eg- +94 77582921"required><br>
            </div>
            <div class="form-control">
              <label>Name of the Vaccine</label><br>
             <br> <input name="vaccine_name" id="vaccineName" class="select3" placeholder="Name of the Vaccine" ><br>
            </div>
            <div class="form-control">
              <label>Physician </label><br>
             <br> <select class="select3" name="physician" id="physician" placeholder="Name of the Vaccine" >
                        <option value="Dr.Malith">Dr.Malith</option>
                        <option value="Dr.Silva">Dr.Silva</option>
                        <option value="Dr.Perera">Dr.Perera</option>
                    </select><br>
            </div>
          </div>
          <div class="right-panel">
            <div class="form-control">
              <label>Patient Age</label><br>
              <br><input name="age" id="patientAge" class="select3" placeholder="eg- 75 years old" > <br>
            </div>
            <div class="form-control">
              <label>Address</label> <br>
             <br> <input name="user_address" id="address" class="select3" placeholder="eg- 1st lane, Colombo" ><br>
            </div>
            <div class="form-control">
              <label>Schedule date</label><br>
             <br> <input name="s_date" id="scheduleDate" class="select3" type="datetime-local" > <br>
            </div>
            <div class="form-control">
              <label>Vaccine Center</label><br>
             <br> <select class="select3" name="center" id="" placeholder="Name of the Vaccine" >
                        <option value="Malabe">Malabe</option>
                        <option value="Kaduwela">Kaduwela</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Galle">Galle</option>
                        <option value="Kegalla">Kegalla</option>
                        <option value="Kandy">Kandy</option>
                    </select><br> <br>
            </div>
          </div>
        </div>
        <div>
          <input class="checkbox" type="checkbox" id="terms" required>
          <label>I agree to the terms and conditions</label>
        </div>
        <div class="btn-group">
          <button type="button" class="btn-outline" onclick="cancelForm()">Cancel</button>
          <button type="submit" name="submit" class="btn-fill" onclick="submitForm()">Submit</button>
        </div>
      </form>
    </div>
  </div>
 
</body>
</html>














