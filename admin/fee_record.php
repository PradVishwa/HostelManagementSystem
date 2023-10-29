<?php
require("header.php");
require("dashbord_menu.php");
require("../dbcon.php");
$slct_qry = "SELECT * FROM `tbl_fee`";
$res = mysqli_query($con, $slct_qry);
// $row = mysqli_fetch_array($res);

//  echo $row['f_name']; 
?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Fee Recoard</span>
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
                            <h3 class=" h1 text-center">Payment</h3>
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
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Amount</th>
                                    <th>Month</th>
                                    <th>Payment Id</th>
                                    <th>Status</th>
                                    <th>DORP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $i; ?></td>
                                        <td><?php echo $row['f_name']; ?></td>
                                        <td><?php echo $row['f_branch']; ?></td>
                                        <td><?php echo $row['f_email']; ?></td>
                                        <td><?php echo $row['f_mobile']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['month']; ?></td>
                                        <td><?php echo $row['razorpay_payment_id']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['dorp']; ?></td>
                                    </tr>


                                <?php
                                    $i++;
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php
    require("footer.php");

    ?>