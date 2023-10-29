<?php
require("../admin/header.php");
require("../dbcon.php");
require("menu.php");

$email = $_SESSION['student'];
// echo $_SESSION['student'];
if ($email == "") {
  echo "
          <script>
              alert('Access Denide');
              window.location.href='graviance.php';
              </script>
              ";
} else {
  $slct_qry = "SELECT * FROM tbl_student WHERE email='$email'";
  $res = mysqli_query($con, $slct_qry);
  $row = mysqli_fetch_array($res);
?>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Grievance</span>
      </div>
      <div class="profile-details">
        <div class="dropdown">
          <a class="btn btn-primary" href="dashboard.php">
            Go to Back
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Grievance</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <img src="../assets/img/DSC_2972.JPG" class="w-25" alt=""> -->

    <div class="home-content">
      <div class="card mx-5" style="background: #021832;">
        <div class="row g-0">

          <div class="col-md-4" style="background: #caa169;">
            <img src="../assets/img/Government.png" class="img-fluid rounded-3 my-auto" alt="...">
          </div>

          <div class="col-md-8 text-center">
            <div class="card-body ">
              <h3 class="card-title text-light ">Grievance</h3>


              <form action="" class="form-group" method="POST">

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-message-rounded-dots'></i></span>
                  <input type="text" name="sub" class="form-control" placeholder=" Subject">
                </div>

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-pen'></i></span>
                  <textarea name="sms" class="form-control" placeholder="Enter Your Message " rows="3"></textarea>
                </div>

                <input type="hidden" name="name" class="form-control" value="<?php echo $row['name']; ?>">

                <input type="hidden" name="email" class="form-control" value="<?php echo $row['email']; ?>">

                <input type="hidden" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">

                <input type="hidden" name="branch" class="form-control" value="<?php echo $row['branch']; ?>">

                <input type="hidden" name="status" class="form-control" value="Pending...">

                <div class="col-lg mb-3 mb-lg-3">
                  <button type="reset" class="btn btn-danger mx-3 mx-lg-5 rounded-pill">Cancel</button>
                  <button type="submit" name="send" class="btn btn-success rounded-pill mx-3 mx-lg-5">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-5 my-3">
        <div class="row mx-0">
          <div class="col-lg text-center " style="border-top: 2px solid #caa169;">
            <div class="card-body  ">
              <!-- <h3 class="card-title text-light ">Attendence</h3> -->
              <div class="row">
                <div class="col-lg-10 view_stu">
                  <h3 class=" h1 text-center">Grievance Record</h3>
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
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Date & Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $slct_qry = "SELECT * FROM tbl_grievance where g_email='$email'" ;
                    $res1 = mysqli_query($con, $slct_qry);
                    $i = 1;
                    while ($row = mysqli_fetch_array($res1)) {
                    ?>
                      <tr class="">
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $row['g_sub']; ?></td>
                        <td><?php echo wordwrap($row['g_sms'],25,"<br>\n"); ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['Dor']; ?></td>
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
  require("../admin/footer.php");
}

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $sub = $_POST['sub'];
  $sms = $_POST['sms'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $branch = $_POST['branch'];
  $status = $_POST['status'];

  $insrt = "INSERT INTO `tbl_grievance`(`g_name`, `g_sub`, `g_sms`, `g_email`, `g_mobile`, `g_branch`, `status`, `date`, `Dor`) VALUES ('$name','$sub','$sms','$email','$mobile','$branch','$status',curdate(),now())";


  if (mysqli_query($con, $insrt)) {
    echo "
      <script>
          alert('Message Send Successfull');
          window.location.href='graviance.php';
      </script>
      
  ";
  } else {
    echo "
      <script>
          alert('Server Down');
          window.location.href='graviance.php';
      </script>
  ";
  }
}
?>