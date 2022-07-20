<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/residentbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Resident List</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Resident List</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <a href="#" class="btn btn-secondary modal-trigger" data-toggle="modal" data-target="#add_resident">Add Resident</a>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">

                  <div class="row">
                     <div class="col-3">
                      <label>Name:</label><input type="text" name="" id="names" class="form-control">
                    </div> 
                    <div class="col-3">
                     <label>Voter Status:</label> 
                  <select id="register_votersss" class="form-control">
                    <option value="">Select Voter Status</option>
                    <option value="registered">Registered</option>
                    <option value="not_registered">Not Registered</option>
                  </select>
                    </div>        
                     <div class="col-6">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="search_resident()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
              
                  <br>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-6">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="resident_list">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Citizenship</th>
                    <th>Occupation</th>
                    <th>Voter Status</th>
            </thead>
            <tbody id="list_of_resident" style="text-align:center;"></tbody>
                </table>
              </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</div>
</div>
</section>
</div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/resident_script.php';?>
