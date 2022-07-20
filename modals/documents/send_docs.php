<div class="modal fade" id="send_docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Send Document</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
        <form action="../../process/admin/send_docs.php"  enctype="multipart/form-data" method="POST">
          <input type="hidden" name="id_document" id="id_document">
            <div class="row">
              <input type="hidden" name="send_by" id="send_by" value="<?=$fname;?>">
              <div class="col-12">
                <label>File:</label>
                    <input type="file" name="filess[]" id ="filess" class="form-control-lg" accept="application/pdf" required>
              </div>
            </div>
            <br>
            <div class="row">
               <div class="col-6">
                  <label>Send to:</label>
                  <input type="text" name="requester_sent" id="requester_sent" class="form-control" readonly>
                  <input type="hidden" name="send_bys" id="send_bys" value="<?=$fname;?>">
                  <input type="hidden" name="status_docs" id="status_docs" value="done">
              </div>
              <div class="col-6">
                <label>File Requested:</label>
                <input type="text" name="requested_file_sent[]" id="requested_file_sent" class="form-control" readonly>
              </div>
            </div>
            <div class="row">
               <div class="col-6">
                    <label>Requested Date:</label>
                     <input type="date" name="date_requested_sent" id="date_requested_sent" class="form-control" value="<?=$server_date_only;?>" readonly>
              </div>
              <div class="col-6">
                    <label>Date Sent:</label>
                     <input type="date" name="date_sent" id="date_sent" class="form-control" value="<?=$server_date_only;?>" readonly>
              </div>
            </div>
                    


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <input type="submit" class="btn btn-primary" name="submit">

      </div>
       </form>
    </div>
  </div>
</div>
