<?php
require("header.php");
require("dashbord_menu.php");
require("../dbcon.php");
$slct_qry = "SELECT * FROM tbl_student where status='alloted'";
$res = mysqli_query($con, $slct_qry);



?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Alloted Room</span>
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
                    <div class="row" style="border-bottom: 2px solid #caa169;">
                        <div class="col-lg-10">
                            <h3 class=" h1 text-center">Alloted Room</h3>
                        </div>
                        <div class="col-lg-2 text-end ">

                            <button onclick="section('id')" class="btn text-light" style="background: #021832;">
                                <i class='bx bxs-printer bx-md'></i></button>

                        </div>

                    </div>

                    <div class="table-responsive p-0 m-0 text-light">

                        <table class=" table-striped ">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Application Number</th>
                                    <!-- <th>Roll Number</th> -->
                                    <th>Branch Name</th>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <!-- <th>Mother's Name</th> -->
                                    <th>Aadhar Number</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Photo</th>
                                    <th>Room No.</th>
                                    <!-- <th>Obtained Mark</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Rank Card</th>
                                            <th>Status</th>
                                            <th>DOR</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['appli_no']; ?></td>
                                        <!-- <td><?php echo $row['roll_no'];
                                                    $roll_no = $row['roll_no'];
                                                    ?></td> -->
                                        <td><?php echo $row['branch']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>

                                        <td><?php echo $row['aadhar']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><?php echo $row['email']; ?></td>

                                        <td><?php echo $row['address']; ?></td>

                                        <td><img src="http://localhost/hostel/Data/Img/<?php echo $row['stu_img']; ?>" class="rounded" height="50px" width="50px" alt=""></td>


                                        <td><?php $query1 = "select *from tbl_alloted_room where s1=$roll_no or s2=$roll_no or s3=$roll_no";
                                            // echo $query;
                                            $res1 = $con->query($query1);
                                            $row1 = mysqli_fetch_array($res1);
                                            echo $row1['room_no']
                                            ?></td>


                                    </tr>
                                <?php
                                    $i++;
                                } ?>
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