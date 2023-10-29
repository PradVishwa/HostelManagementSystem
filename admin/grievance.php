<?php
require("header.php");
require("dashbord_menu.php");
require("../dbcon.php");
$slct_qry = "SELECT * FROM tbl_grievance WHERE status='Pending...' ";
$res = mysqli_query($con, $slct_qry);

if (isset($_POST['g_id'])) {
    $g_id = $_POST['g_id'];
    // echo $g_id;
    $query = "UPDATE `tbl_grievance` SET `status`='seen' , `Dor`=now() WHERE g_id='$g_id'";
    //  echo $query;
    mysqli_query($con, $query);
}

$slct = "SELECT * FROM tbl_grievance WHERE status='Seen' ";
$res1 = mysqli_query($con, $slct);


?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">View Grievance</span>
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
        <div class="row card mx-0 ">
            <div class="col-lg text-center">
                <div class="card-body " style="background: #021832; color: #fff;" id="id">
                    <div class="row">
                        <div class="col-lg-10 view_stu">
                            <h3 class=" h1 text-center">Grievance List</h3>
                        </div>
                        <div class="col-lg-2 text-end ">

                            <button onclick="section('id')" class="btn text-light" style="background: #021832;">
                                <i class='bx bxs-printer bx-md'></i></button>

                        </div>

                    </div>

                    <div class="table-responsive">

                        <table class="table text-light">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>name</th>
                                    <th>Gri_Subject</th>
                                    <th>Grievance</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Branch</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($res)) {


                                ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $i; ?></td>
                                        <td><?php echo $row['g_name'] ?></td>
                                        <td><?php echo $row['g_sub'] ?></td>
                                        <td><?php echo $row['g_sms'] ?></td>
                                        <td><?php echo $row['g_email'] ?></td>
                                        <td><?php echo $row['g_mobile'] ?></td>
                                        <td><?php echo $row['g_branch'] ?></td>
                                        <td>
                                            <form class="form-group" action="" method="post">
                                                <input type="hidden" class="form-control" name="g_id" value="<?php echo $row['g_id'] ?>">
                                                <!-- <input type="hidden" class="form-control" name="seen" value="Seen"> -->
                                                <input type="submit" class="form-control" style="background:#caa169; color:#021832;" name="response" value="Seen">
                                            </form>
                                        </td>
                                        <td><?php echo $row['date'] ?></td>


                                    </tr>
                                <?php
                                    $i++;
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#seenModal">
                        Seen Grievance
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="seenModal" tabindex="-1" aria-labelledby="seenModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content" style="background: #021832; color: #fff;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="seenModalLabel">Seen Grievance</h1>
                                    <button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">

                                        <table class="table text-light">
                                            <thead>
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>name</th>
                                                    <th>Gri_Subject</th>
                                                    <th>Grievance</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Branch</th>
                                                    <th>Date</th>
                                                    <th>Response D&T</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($res1)) {


                                                ?>
                                                    <tr class="">
                                                        <td scope="row"><?php echo $i; ?></td>
                                                        <td><?php echo $row['g_name'] ?></td>
                                                        <td><?php echo $row['g_sub'] ?></td>
                                                        <td><?php echo $row['g_sms'] ?></td>
                                                        <td><?php echo $row['g_email'] ?></td>
                                                        <td><?php echo $row['g_mobile'] ?></td>
                                                        <td><?php echo $row['g_branch'] ?></td>
                                                        <td><?php echo $row['date'] ?></td>
                                                        <td><?php echo $row['Dor'] ?></td>


                                                    </tr>
                                                <?php
                                                    $i++;
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <p>Admin</p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php
    require("footer.php");

    // if (isset($_POST['response'])) {
    //     $g_id=$_POST['g_id'];
    //     $seen=$_POST['seen'];
    //     if ($g_id=='') {
    //         # code...
    //     }

    ?>