<?php
require("../admin/header.php");
require("menu.php");
require("../dbcon.php");

$email = $_SESSION['student'];
$slct_qry = "SELECT * FROM tbl_attendance WHERE email='$email'";
$res = mysqli_query($con, $slct_qry);


?>

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Attendance</span>
        </div>
        <div class="profile-details">
            <div class="dropdown">
                <a class="btn btn-primary" href="dashboard.php">
                    Go to Back
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Attendance</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <img src="../assets/img/DSC_2972.JPG" class="w-25" alt=""> -->

    <div class="home-content">
        <div class="row mx-5 my-3">
            <div class="row mx-0">
                <div class="col-lg text-center " style="border-top: 2px solid #caa169;">
                    <div class="card-body  ">
                        <!-- <h3 class="card-title text-light ">Attendence</h3> -->
                        <div class="row">
                            <div class="col-lg-10 view_stu">
                                <h3 class=" h1 text-center">Attendance Record</h3>
                            </div>
                            <div class="col-lg-2 text-end ">

                                <button onclick="section('id')" class="btn text-light" style="background: #021832;">
                                    <i class='bx bxs-printer bx-md'></i></button>

                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row"><?php echo $i ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['time']; ?></td>
                                            <td><?php echo $row['attendance']; ?></td>
                                        </tr>
                                    </tbody>
                                <?php
                                    $i++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
require("../admin/footer.php");

?>