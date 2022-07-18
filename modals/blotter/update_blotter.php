<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="update_blotter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Blotter Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <input type="hidden" name="" id="id_blotter">
        <div class="row">
             <div class="col-3">
              <label>Date Recorded:</label> <input type="date" name="date_recorded_update" id="date_recorded_update" class="form-control" autocomplete="off">
            </div>
            <div class="col-3">
              <label>Complainant:</label> <input type="text" name="complainant_update" id="complainant_update" class="form-control" autocomplete="off">
            </div>
              <div class="col-3">
              <label>Person to Complaint:</label> <input type="text" name="person_to_complaint_update" id="person_to_complaint_update" class="form-control" autocomplete="off">
            </div>
           
             <div class="col-3">
              <label>Complaint:</label> <input type="text" name="complaint_update" id="complaint_update" class="form-control" autocomplete="off">
            </div>
        </div>

         <div class="row">
             <div class="col-3">
              <label>Action Taken:</label> <input type="text" name="action_taken_update" id="action_taken_update" class="form-control" autocomplete="off">
            </div>
            <div class="col-3">
               <label>Status:</label> <select id="status_update" class="form-control">
                <option value="">Select Status</option>
                <option value="pending">Pending</option>
                <option value="solved">Solved</option>
                <option value="unsolved">Unsolved</option>
              </select>
            </div>
              <div class="col-3">
              <label>Location of Incedence:</label> <input type="text" name="location_of_incedence_update" id="location_of_incedence_update" class="form-control" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" onclick="delete_blotter()">Delete Blotter</a>
        <a href="#" class="btn btn-primary" onclick="update_blotter()">Update Blotter</a>
      </div>
    </div>
  </div>
</div>