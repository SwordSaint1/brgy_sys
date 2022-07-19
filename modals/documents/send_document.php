<div class="modal fade" id="add_docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Send Document</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../process/user/send_docs.php"  enctype="multipart/form-data" method="POST">
            <div class="row">
              <input type="hidden" name="send_by" id="send_by" value="<?=$fname;?>">
              <div class="col-12">
                <label>File:</label>
                    <input type="file" name="files[]" id ="files" class="form-control-lg" accept="application/pdf" required>
              </div>
            </div>
            <br>
            <div class="row">
               <div class="col-6">
                    <label>File Type:</label><br>
                    <select name="type[]" id="types" class="form-control" required>
                      <option value="">Select File Type</option>
                      <option value="barangay_clearance">Barangay Clearance</option>
                      <option value="certificate_of_indigency">Certificate of Indigency</option>
                      <option value="proof_of_residency">Proof of Residency</option>
                    </select>
              </div>
              <div class="col-6">
                    <label>Date Sent</label>
                     <input type="date" name="date_sent" id="date_sent" class="form-control" value="<?=$server_date_only;?>" readonly>
              </div>
            </div>
                    


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <input type="submit" class="btn btn-danger" name="submit" value="Submit">

      </div>
         </form>
    </div>
  </div>
</div>
