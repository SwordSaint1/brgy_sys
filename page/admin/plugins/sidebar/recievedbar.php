  <aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../../assets/img/Barangay184.png" alt="TRS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$role;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$fname;?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="fas fa-bullhorn"></i>
              <p>
                Announcement
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="resident.php" class="nav-link">
              <i class="  fa fa-file-alt"></i>
              <p>
                Residents Details
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="blotter.php" class="nav-link">
              <i class="fas fa-edit"></i>
              <p>
                Blotter Details
              </p>
            </a>
          </li>
           <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-file-pdf"></i>
              <p>
               Documents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="docs.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pending Documents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="recieved.php" class="nav-link active">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Recieved Documents</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="accounts.php" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
               Account Management              
              </p>
            </a>
          </li>
           
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
