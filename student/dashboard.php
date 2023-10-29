<?php
require("../admin/header.php");
require("menu.php");
require("../dbcon.php");

$email = $_SESSION['student'];
// echo $_SESSION['admin'];
// attendence details 
$slct_qry2 = "SELECT COUNT(id) as attendence_count from tbl_attendance Where email ='$email'";
$res2 = mysqli_query($con, $slct_qry2);
$row2 = mysqli_fetch_array($res2);
$totalAttendence = $row2['attendence_count'];

$percentege = ($totalAttendence / 365) * 100;

$per = number_format($percentege, 0);



// $month[1];
if ($email == "") {
  echo "
  <script>
  alert('Access Denide');
  window.location.href='index.php';
  </script>
  ";
} else {
  // student details 
  $slct_qry = "SELECT * FROM tbl_student WHERE email='$email'";
  $res = mysqli_query($con, $slct_qry);
  $row = mysqli_fetch_array($res);
  $roll=$row['roll_no'];
  // mess notification 
  $slct_qry_1 = "SELECT * FROM `tbl_mesh_notification` ORDER BY noti_id DESC";
  $res1 = mysqli_query($con, $slct_qry_1);

  // room details
  $slct_qry3="select * from tbl_alloted_room where s1='$roll'or s2='$roll'or s3='$roll' ";
  $res3 = mysqli_query($con, $slct_qry3);
  $row3 = mysqli_fetch_array($res3);


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
            <img src="http://localhost/hostel/Data/Img/<?php echo $row['stu_img']; ?>" alt="" class="img-fluid p-3 rounded-circle" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body ">
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3 text-center">
                  <h1 class="card-title text-light ">Student Profile</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "> <span style="color: #caa169;">Name: </span><?php echo $row['name']; ?></h6>
                </div>
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Room No.: </span><?php echo $row3['room_no']; ?></h6>
                </div>
              </div>
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "> <span style="color: #caa169;">Branch: </span><?php echo $row['branch']; ?></h6>
                </div>
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Application No: </span><?php echo $row['appli_no']; ?></h6>
                </div>
              </div>
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Date Of Birth: </span><?php echo $row['dob']; ?></h6>
                </div>
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Gender: </span><?php echo $row['gender']; ?></h6>
                </div>
              </div>
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Email: </span><?php echo $row['email']; ?></h6>
                </div>
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Mobile: </span><?php echo $row['mobile']; ?></h6>
                </div>
              </div>
              <div class="row">
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">JEECUP Roll No: </span><?php echo $row['roll_no']; ?></h6>
                </div>
                <div class="col-lg mb-3 mb-lg-3">
                  <h6 class="card-text text-light "><span style="color: #caa169;">Address: </span><?php echo $row['address']; ?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-5 my-3">
        <div class="card col-5 me-auto border-warning" style=" height:300px; background:#021832;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title text-light">Mess Notification</h5>
            <div class="h-100 mb-2" style="border-top: 2px solid #caa169;">
              <marquee behavior="scroll" direction="up" scrollamount="1" height="75%">
                <?php
                $i = 1;
                while ($row1 = mysqli_fetch_array($res1)) {

                ?>
                  <p class="card-text text-danger"><?php echo $row1['notification']; ?>
                    <span> &nbsp;~<?php echo $row1['date']; ?></span>
                  </p>
                <?php
                  $i++;
                }
                ?>
              </marquee>
            </div>
          </div>
        </div>
        <div class="card col-6 ms-auto border-warning" style="background:#021832;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title text-light">Attendance Summary</h5>
            <table class="table text-light" style="border-top: 2px solid #caa169;">
              <thead class="thead-light">
                <tr style="color:#caa169;">
                  <th scope="col">S.N.</th>
                  <th scope="col">Session</th>
                  <th scope="col">Attendance %</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $n = 1;
                // while ($row2) {
                ?>
                <tr>
                  <th scope="row"><?php echo $n; ?></th>
                  <td>2023-24</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-success text-danger" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $per; ?>%</div>
                    </div>
                    <?php echo $per; ?>%
                  </td>
                </tr>
                <?php
                $n++;
                // }
                ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer">

          </div>
        </div>


      </div>
  </section>

<?php
  require("../admin/footer.php");
}
?>