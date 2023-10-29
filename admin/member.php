<?php
include("./../dbcon.php");
require("header.php");
require("dashbord_menu.php");

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Member</span>
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
        <div class="card mx-5" style="background: #021832;color: #fff;">
            <div class="row g-0">

                <div class="col-lg text-center">

                    <div class="card-body ">

                        <h3 class="card-title text-light ">Add Member</h3>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-envelope'></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock'></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="pass" aria-label="Passs" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-image-add'></i></span>
                                    <input type="file" class="form-control" placeholder="Img" name="img" aria-label="Img" aria-describedby="basic-addon1" required accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-current-location'></i></span>
                                    <textarea class="form-control" placeholder="Address" name="add" aria-label="Add" aria-describedby="basic-addon1" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg mb-3 mb-lg-3">
                                <button type="submit" name="submit" class="btn btn-success mx-3 mx-lg-5">Add Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="row mx-0">
                <div class="col-lg text-center " style="border-top: 2px solid #caa169;">
                    <div class="card-body  ">
                        <!-- <h3 class="card-title text-light ">Member</h3> -->
                        <div class="row">
                            <div class="col-lg-10 view_stu">
                                <h3 class=" h1 text-center">Member Record</h3>
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
                                        <th>Emaill</th>
                                        <th>Password</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>DOR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $slct_qry = "SELECT * FROM tbl_member";
                                    $res1 = mysqli_query($con, $slct_qry);
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($res1)) {
                                    ?>
                                        <tr class="">
                                            <td scope="row"><?php echo $i; ?></td>
                                            <td><?php echo $row['member_name']; ?></td>
                                            <td><?php echo $row['member_email']; ?></td>
                                            <td><?php echo $row['member_pass']; ?></td>
                                            <td><img src="http://localhost/hostel/Data/Img/<?php echo $row['member_img']; ?>" height="50px" width="50px"></td>
                                            <td><?php echo $row['member_add']; ?></td>
                                            <td><?php echo $row['dor']; ?></td>
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
    </div>
    </div>
</section>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $add = $_POST['add'];
    $img_name = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $img_size = $_FILES['img']['size'];
    $img_tmp = $_FILES['img']['tmp_name'];

    $slct_qry = "SELECT * FROM tbl_member WHERE member_email='$email'";
    $res = mysqli_query($con, $slct_qry);
    $row = mysqli_fetch_array($res);

    if ($row) {
        echo "
                    <script>
                        alert('You are already requested');
                        window.location.href='member.php';
                    </script>
            ";
    }
    else {
        $insrt_qry="INSERT INTO `tbl_member`(`member_name`, `member_email`, `member_pass`, `member_img`,`member_add`, `dor`) VALUES ('$name','$email','$pass','$img_name','$add',now())";
        $res=mysqli_query($con, $insrt_qry);
        if ($res) {
            move_uploaded_file($img_tmp, "../Data/img/$img_name");
            echo "
                 <script>
                     alert('Member Inserted Successful !');
                     window.location.href='member.php';
                 </script>
             ";
        }
    }
}
require("footer.php");

?>