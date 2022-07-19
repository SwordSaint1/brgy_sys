<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="update_resident" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Resident Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <input type="hidden" name="" id="id_resident">
             <div class="col-3">
              <label>Full Name:</label> <input type="text" name="name_update" id="name_update" class="form-control" autocomplete="off">
            </div>
            <div class="col-3">
              <label>Address:</label> <input type="text" name="address_update" id="address_update" class="form-control" autocomplete="off">
            </div>
              <div class="col-3">
              <label>Date of Birth:</label> <input type="date" name="date_of_birth_update" id="date_of_birth_update" class="form-control" autocomplete="off">
            </div>
           
             <div class="col-3">
              <label>Age:</label> <input type="number" name="age_update" id="age_update" class="form-control" onkeypress="return event.charCode >= 48" min="1">
            </div>
        </div>

         <div class="row">
             <div class="col-3">
              <label>Gender:</label> <select id="gender_update" class="form-control">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="col-3">
               <label>Civil Status:</label> <select id="civil_status_update" class="form-control">
                <option value="">Select Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
              </select>
            </div>
              <div class="col-3">
              <label>Citizenship:</label> <input type="text" name="citizenship_update" id="citizenship_update" class="form-control" autocomplete="off">
            </div>
           
             <div class="col-3">
              <label>Occupation:</label> <input type="text" name="occupation_update" id="occupation_update" class="form-control" autocomplete="off">
            </div>
        </div>

         <div class="row">
             <div class="col-3"> 
              <label>Voter Status:</label>
            <select id="register_voters_update" class="form-control">
              <option value="">Select Voter Status</option>
              <option value="registered">Registered</option>
              <option value="not_registered">Not Registered</option>
            </select>
            </div>
           
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" onclick="delete_resident()">Delete Resident</a>
        <a href="#" class="btn btn-primary" onclick="update_resident()">Update Resident</a>
      </div>
    </div>
  </div>
</div>