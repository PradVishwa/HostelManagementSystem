<?php
require("header.php");
require("dashbord_menu.php");
require("./../dbcon.php");
$slct_qry = "SELECT * FROM tbl_member";
$res1 = mysqli_query($con, $slct_qry);

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Hostel Member's</span>
        </div>
        <div class="profile-details">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/img/DSC_2972.JPG" class="me-3" alt="">
                    Admin
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item text-primary" href="profile.php">
                            <i class='bx bx-user'></i>
                            Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-1">
                    <h6>For our hostel</h6>
                    <h3>Our hostel Member's</h3>
                </div>
            </div>
            <div class="row " style="color: #caa169;">
                <?php
                $i = 1;
                while ($row1 = mysqli_fetch_array($res1)) {
                ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-4 text-center rounded-3" style="background: #021832;">
                            <h5 class="text-decoration-underline mb-4"><?php echo $row1['member_email']; ?></h5>
                            <img src="http://localhost/hostel/Data/Img/<?php echo $row1['member_img']; ?>" alt="" />
                            <hr />
                            <h6><?php echo $row1["member_add"];?></h6>
                            <span class="btn btn-success rounded-pill"><?php echo $row1['member_name']; ?></span>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
                <!-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3" style="background: #021832;">
                        <h5 class="text-decoration-underline mb-4">Cook</h5>
                        <img src="../assets/img/team/team3.webp" alt="" />
                        <hr />
                        <h3>2500₹ <sub class="fs-6 fw-normal">/Month</sub></h3> 
                        <span class="btn btn-success rounded-pill">Worker_Name</span>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3" style="background: #021832;">
                        <h5 class="text-decoration-underline mb-4">Helper</h5>
                        <img src="../assets/img/team/team3.webp" alt="" />
                        <hr />
                        <h3>1500₹ <sub class="fs-6 fw-normal">/Month</sub></h3>
                        <span class="btn btn-success rounded-pill"></span>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3" style="background: #021832;">
                        <h5 class="text-decoration-underline mb-4">Helper</h5>
                        <img src="../assets/img/team/team3.webp" alt="" />
                        <hr />
                        <h3>1500₹ <sub class="fs-6 fw-normal">/Month</sub></h3>
                        <span class="btn btn-success rounded-pill" >Worker_Name</span>
                    </div>
                </div> 
            </div> -->
            </div>
        </div>
    </div>
</section>

<?php
require("footer.php");
?>