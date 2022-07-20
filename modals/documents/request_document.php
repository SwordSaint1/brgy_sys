<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="request_document" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4">
              <label>Requester:</label> <input type="email" name="requester" id="requester" class="form-control" autocomplete="off" value="<?=$fname;?>" readonly>
            </div>
             <div class="col-4">
               <label>File Type:</label><br>
                    <select name="requested_file" id="requested_file" class="form-control" required>
                      <option value="">Select File Type</option>
                      <option value="barangay_clearance">Barangay Clearance</option>
                      <option value="certificate_of_indigency">Certificate of Indigency</option>
                      <option value="proof_of_residency">Proof of Residency</option>
                    </select>
            </div>
           
            <div class="col-4">
              <label>Request Date</label>
              <input type="date" name="date_requested" id="date_requested" class="form-control" value="<?=$server_date_only;?>" readonly>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary" onclick="request_docs()">Request Document</a>
      </div>
    </div>
  </div>
</div>