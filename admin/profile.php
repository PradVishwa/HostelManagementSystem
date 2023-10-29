<?php 
  require("header.php");
  require("profile_menu.php");
?>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Profile</span>
      </div>
      <div class="profile-details">
        <div class="dropdown">
          <a class="btn btn-primary" href="dashbord.php">
            Back to home
          </a>
        </div>
      </div>
    </nav>

    <div class="home-content">
      <div class="card mx-5" style="background: #021832;">
        <div class="row g-0">
          <div class="col-md-4" style="background: #caa169;">
            <img src="../assets/img/DSC_2972.JPG" class="img-fluid p-3 rounded-circle" alt="...">
          </div>
          <div class="col-md-8 text-center">
            <div class="card-body ">
              <h3 class="card-title text-light ">Hostel Warden</h3>
              <h5 class="card-text text-light ">Admin</h5>
              <p class="card-text text-light">admin@gmail.com</p>            
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php 
  require("footer.php");
  ?>