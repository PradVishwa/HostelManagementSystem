<?php
require("../dbcon.php");
$email=$_SESSION['admin'];
$query = "SELECT * FROM `tbl_admin` WHERE email='$email'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_array($res);
$pp = $row['password'];
if(isset($_POST['change'])){

  $op = $_POST['op'];
  $np = $_POST['np'];
  $cp = $_POST['cp'];
  // echo $op."<br>".$np."<br>".$cp;
  if($pp==$op){
    if ($op==$np) {
      header("location:change_pass.php");
    }
    elseif($np==$cp){
      $query2 = "update tbl_admin set password='$np' where email='$email'";
      mysqli_query($con, $query2);
      header("location:index.php");

    }
    else{
      header("location:change_pass.php");
    }
  }
  else{
    header("location:change_pass.php");
  }

}
 
 require("header.php");
 require("profile_menu.php");
?>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Change Password</span>
      </div>
      <div class="profile-details">
        <div class="dropdown">
          <a class="btn btn-primary" href="dashbord.php">
            Go to Back
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Change Password</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <img src="../assets/img/DSC_2972.JPG" class="w-25" alt=""> -->

    <div class="home-content">
      <div class="card mx-5" style="background: #021832;">
        <div class="row g-0">

          <div class="col-md-4">
            <img src="../assets/img/DSC_2972.JPG" class="img-fluid rounded-start" alt="...">
          </div>

          <div class="col-md-8 text-center">

            <div class="card-body ">

              <h3 class="card-title text-light ">Change Password</h3>


              <form action="" class="form-group" method="POST">

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock-alt'></i></span>
                  <input type="text" name="op" class="form-control" placeholder="Enter Old Password">
                </div>

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock-alt'></i></span>
                  <input type="password" name="np" class="form-control" placeholder="Enter New Password">
                </div>

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock-open-alt'></i></span>
                  <input type="text" name="cp" class="form-control" placeholder="Re-enter New Password">
                </div>

                <div class="col-lg mb-3 mb-lg-3">
                  <button type="submit" name="change" class="btn btn-success mx-3 mx-lg-5">Change</button>
                  <button type="reset" class="btn btn-danger mx-3 mx-lg-5">Reset</button>
                </div>

              </form>

            </div>
          </div>


        </div>
      </div>
  </section>
<?php 
require("footer.php");
?>