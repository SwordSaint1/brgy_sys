<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="update_docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Document Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <input type="hidden" name="" id="id_docs">
            <div class="col-4">
              <label>Sender:</label> <input type="text" name="sender_update" id="sender_update" class="form-control" autocomplete="off" readonly>
            </div>
             <div class="col-4">
              <label>Document:</label><a href="" id="preview_docs" target="_blank"><input type="text" name="" id="prev_docs" class="form-control" readonly></a>
            </div>
              <div class="col-4">
                    <label>File Type:</label><br>
                    <select name="type_docs" id="type_docs" class="form-control" required disabled>
                      <option value="">Select File Type</option>
                      <option value="barangay_clearance">Barangay Clearance</option>
                      <option value="certificate_of_indigency">Certificate of Indigency</option>
                      <option value="proof_of_residency">Proof of Residency</option>
                    </select>
              </div> 
        </div>
        <div class="row">
           <div class="col-4">
              <label>Date Sent:</label> <input type="date" name="date_sent_update" id="date_sent_update" class="form-control" autocomplete="off" readonly>
            </div>
             <div class="col-4">
              <label>Date Recieved:</label> <input type="date" name="date_recieved" id="date_recieved" class="form-control" autocomplete="off" readonly value="<?=$server_date_only;?>">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary" onclick="recieved_docs()">Recived</a>
      </div>
    </div>
  </div>
</div>