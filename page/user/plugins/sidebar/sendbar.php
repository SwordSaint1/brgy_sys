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
            <a href="dashboard.php" class="nav-link ">
              <i class="fas fa-bullhorn"></i>
              <p>
                Announcement
               
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="send.php" class="nav-link active">
              <i class="  fa fa-file-alt"></i>
              <p>
                Send Documents
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="blotter.php" class="nav-link ">
              <i class="fas fa-list"></i>
              <p>
                List of Blotter
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
