<?php
require("../admin/header.php");
require("menu.php");
require("../dbcon.php");

$email = $_SESSION['student'];
// echo $_SESSION['admin'];
if ($email == "") {
  echo "
          <script>
              alert('Access Denide');
              window.location.href='index.php';
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
        <span class="dashboard">Fee Payment</span>
      </div>
      <div class="profile-details">
        <div class="dropdown">
          <a class="btn btn-primary" href="dashboard.php">
            Go to Back
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Fee Payment</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <img src="../assets/img/DSC_2972.JPG" class="w-25" alt=""> -->

    <div class="home-content">
      <div class="card mx-5" style="background: #021832;">
        <div class="row g-0">

          <div class="col-md-4" style="background: #caa169;">
            <img src="../assets/img/Payment-new.png" class="img-fluid rounded-3" alt="...">
          </div>

          <div class="col-md-8 text-center">

            <div class="card-body ">

              <h3 class="card-title text-light ">Fee Payment</h3>


              <form action="../RazorPay-PHP-Integration-with-DB-main/pay.php" class="form-group" method="POST">

                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock-alt'></i></span>
                  <input type="number" name="price" class="form-control" placeholder=" Ammount">
                </div>
                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <input type="hidden" name="customername" class="form-control" value="<?php echo $row['name']; ?>">

                  <input type="hidden" name="email" class="form-control" value="<?php echo $row['email']; ?>">

                  <input type="hidden" name="contactno" class="form-control" value="<?php echo $row['mobile']; ?>">

                  <input type="hidden" name="branch" class="form-control" value="<?php echo $row['branch']; ?>">
                </div>
                <div class="col-lg mb-3 mb-lg-3 input-group">
                  <span class="input-group-text" id="basic-addon1"><i class='bx bx-calendar'></i></span>
                  <select name="month" class="form-control">
                    <option value="">--Select Month--</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="aprial">Aprial</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="octuber">Octuber</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                  </select>
                </div>

                <div class="col-lg mb-3 mb-lg-3">
                  <button type="reset" class="btn btn-danger mx-3 mx-lg-5 rounded-pill">Cancel</button>
                  <button type="submit" name="pay" class="btn btn-success rounded-pill mx-3 mx-lg-5">Pay</button>
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
                  <h3 class=" h1 text-center">Fee Record</h3>
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
                      <th>Amount</th>
                      <th>Payment Id</th>
                      <th>Month</th>
                      <th>Status</th>
                      <th>Date & Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $slct_qry = "SELECT * FROM tbl_fee where f_email='$email'";
                    $res1 = mysqli_query($con, $slct_qry);
                    $i = 1;
                    while ($row1 = mysqli_fetch_array($res1)) {
                    ?>
                      <tr class="">
                        <td scope="row"><?php echo $i; ?></td>
                        <td><?php echo $row1['amount']; ?></td>
                        <td><?php echo$row1['razorpay_payment_id']; ?></td>
                        <td><?php echo $row1['month']; ?></td>
                        <td><?php echo $row1['status']; ?></td>
                        <td><?php echo $row1['dorp']; ?></td>
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
  </section>

<?php
  require("../admin/footer.php");
}
?>