<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="add_blotter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Blotter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
             <div class="col-3">
              <label>Date Recorded:</label> <input type="date" name="date_recorded" id="date_recorded" class="form-control" autocomplete="off">
            </div>
            <div class="col-3">
              <label>Complainant:</label> <input type="text" name="complainant" id="complainant" class="form-control" autocomplete="off">
            </div>
              <div class="col-3">
              <label>Person to Complaint:</label> <input type="text" name="person_to_complaint" id="person_to_complaint" class="form-control" autocomplete="off">
            </div>
           
             <div class="col-3">
              <label>Complaint:</label> <input type="text" name="complaint" id="complaint" class="form-control" autocomplete="off">
            </div>
        </div>

         <div class="row">
             <div class="col-3">
              <label>Action Taken:</label> <input type="text" name="action_taken" id="action_taken" class="form-control" autocomplete="off">
            </div>
            <div class="col-3">
               <label>Status:</label> <select id="status" class="form-control">
                <option value="">Select Status</option>
                <option value="pending">Pending</option>
                <option value="solved">Solved</option>
                <option value="unsolved">Unsolved</option>
              </select>
            </div>
              <div class="col-3">
              <label>Location of Incedence:</label> <input type="text" name="location_of_incedence" id="location_of_incedence" class="form-control" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary" onclick="register_blotter()">Add Blotter</a>
      </div>
    </div>
  </div>
</div>