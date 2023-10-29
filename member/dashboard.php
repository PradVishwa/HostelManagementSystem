<?php
require("../admin/header.php");
require("menu.php");
require("../dbcon.php");

$email = $_SESSION['member'];
// echo $_SESSION['admin'];
if ($email == "") {
    echo "
          <script>
              alert('Access Denide');
              window.location.href='index.php';
          </script>
      ";
} else {
    $slct_qry = "SELECT * FROM tbl_member WHERE member_email='$email'";
    $res = mysqli_query($con, $slct_qry);
    $row = mysqli_fetch_array($res);

?>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Profile</span>
            </div>
            <div class="profile-details">
                <div class="dropdown">
                    <a class="btn btn-primary" href="../index.php">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Log out</span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="home-content">
            <div class="card mx-5" style="background: #021832;">
                <div class="row g-0">
                    <div class="col-md-4" style="background: #caa169;">
                        <img src="http://localhost/hostel/Data/Img/<?php echo $row['member_img']; ?>" alt="" class="img-fluid p-3 rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3 text-center">
                                    <h1 class="card-title text-light ">Member Profile</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3">
                                    <h6 class="card-text text-light "> <span style="color: #caa169;">Name: </span><?php echo $row['member_name']; ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3">
                                    <h6 class="card-text text-light "> <span style="color: #caa169;">Email: </span><?php echo $row['member_email']; ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3">
                                    <h6 class="card-text text-light "> <span style="color: #caa169;">Address: </span><?php echo $row['member_add']; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<?php
    require("../admin/footer.php");
}
?>