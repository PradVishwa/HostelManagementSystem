<?php
require("../dbcon.php");
require("header.php");
require("dashbord_menu.php");

$slct_qry = "SELECT * FROM tbl_student WHERE status='2'";
$res = mysqli_query($con, $slct_qry);

$slct = "SELECT * FROM tbl_student WHERE status='1'";
$res1 = mysqli_query($con, $slct);

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Add New Student</span>
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
                            <h3 class="card-title text-light ">View Request</h3>

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
                                    <th>Roll Number</th>
                                    <th>Distance</th>
                                    <th>Branch Name</th>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Aadhar Number</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>Genral Rank</th>
                                    <th>Obtained Mark</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Rank Card</th>
                                    <th>Status</th>
                                    <th>DOR</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo $i; ?></td>
                                        <td><?php echo $row['appli_no']; ?></td>
                                        <td><?php echo $row['roll_no']; ?></td>
                                        <td><?php echo $row['distance']; ?></td>
                                        <td><?php echo $row['branch']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['mname']; ?></td>
                                        <td><?php echo $row['aadhar']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['rank']; ?></td>
                                        <td><?php echo $row['obt_mark']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['stu_img']; ?></td>
                                        <td><?php echo $row['rank_card']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['dor']; ?></td>
                                        <td><a class="text-decoration-none text-success" href="code.php?id=<?php echo $row['req_id']; ?>&status=1">Confirm</a>
                                        <a class="text-decoration-none text-danger" href="code.php?id=<?php echo $row['req_id']; ?>&status=0">Reject</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewStudent">
                        View Student
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="viewStudent" tabindex="-1" aria-labelledby="viewStudentLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content" style="background: #021832; color: #fff;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="viewStudentLabel">Accepted Student</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                                                    <th>Mother's Name</th>
                                                    <th>Aadhar Number</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Mobile No.</th>
                                                    <th>Email</th>
                                                    <th>Genral Rank</th>
                                                    <th>Obtained Mark</th>
                                                    <th>Address</th>
                                                    <th>Image</th>
                                                    <th>Rank Card</th>
                                                    <th>Status</th>
                                                    <!-- <th>Action</th> -->
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            $i = 1;
                                            while ($row1 = mysqli_fetch_array($res1)) {
                                            ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row1['appli_no']; ?></td>
                                                       
                                                        <td><?php echo $row1['branch']; ?></td>
                                                        <td><?php echo $row1['name']; ?></td>
                                                        <td><?php echo $row1['fname']; ?></td>
                                                        <td><?php echo $row1['mname']; ?></td>
                                                        <td><?php echo $row1['aadhar']; ?></td>
                                                        <td><?php echo $row1['dob']; ?></td>
                                                        <td><?php echo $row1['gender']; ?></td>
                                                        <td><?php echo $row1['mobile']; ?></td>
                                                        <td><?php echo $row1['email']; ?></td>
                                                        <td><?php echo $row1['rank']; ?></td>
                                                        <td><?php echo $row1['obt_mark']; ?></td>
                                                        <td><?php echo $row1['address']; ?></td>
                                                        
                                                        <td><img src="http://localhost/hostel/Data/Img/<?php echo $row1['stu_img']; ?>" class="rounded" height="50px" width="50px" alt=""></td>
                                                        
                                                        <td> <a href="http://localhost/hostel/Data/pdf/<?php echo $row1['rank_card']; ?>" class="text-info">Open</a></td>
                                                        
                                                        <td><?php echo $row1['dor']; ?></td>
                                                        
                                                    </tr>

                                                </tbody>
                                                <tbody>
                                                    <tr class="justify-content-center">
                                                       <td colspan="10"><a name="" id="" class="btn btn-success" href="code.php?request_id=<?php echo $row1['req_id'];?>&allote=1" role="button">Allote</a></td>
                                                       <td ><a name="" id="" class="btn btn-danger" href="code.php?request_id=<?php echo $row1['req_id'];?>&allote=0" role="button">Reject</a></td>
                                                      
                                                    </tr>
                                                </tbody>
                                            <?php
                                                $i++;
                                            } ?>
                                        </table>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
    </div>
    </div>
    
    
</div>
</section>























<?php
$query="UPDATE tbl_student set status='alloted' where staus='1'";
$res=mysqli_query($con, $query);
require("footer.php");

?>