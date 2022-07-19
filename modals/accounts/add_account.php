<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="add_accounts_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4">
              <label>Email:</label> <input type="email" name="email_accounts" id="email_accounts" class="form-control" autocomplete="off">
            </div>
             <div class="col-4">
              <label>Password:</label> <input type="password" name="password_accounts" id="password_accounts" class="form-control" autocomplete="off">
            </div>
           
            <div class="col-4">
              <label>Full Name:</label>
              <input type="text" name="full_name_accounts" id="full_name_accounts" class="form-control">
            </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label>Address:</label>
              <input type="text" name="address_accounts" id="address_accounts" class="form-control">
          </div>
           <div class="col-4">
              <label>Phone No:</label> <input type="number" name="phone_no_accounts" id="phone_no_accounts" class="form-control" onkeypress="return event.charCode >= 48" min="1">
          </div>
           <div class="col-4">
                <label>Role:</label>
             <select id="role_accounts" class="form-control">
               <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
             </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary" onclick="register_user()">Register User</a>
      </div>
    </div>
  </div>
</div>