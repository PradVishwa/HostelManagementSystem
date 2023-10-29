<?php
require("header.php");
require("dashbord_menu.php");
include("./../dbcon.php");
$query = "SELECT * FROM `tbl_student` where status='alloted' order by name";
$res = mysqli_query($con, $query);
date_default_timezone_set('Asia/Kolkata');

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Attendence</span>
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

                        <h3 class="card-title text-light ">Student's Attendence</h3>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class='bx bx-user'></i></span>
                                    <select name="studentname" class="form-control" required>
                                        <option value="">--Select Student--</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                            <option value="<?php echo $row['email']; ?>"><?php echo $row['name']; ?></option>
                                            <!-- <option value="mp">No</option> -->
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1">Date</span>
                                    <input type="text" class="form-control" placeholder="<?php echo date('d-m-y'); ?>" name="date" aria-label="Date" aria-describedby="basic-addon1" value="<?php echo date('y-m-d'); ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1">Attendance</span>
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="attendance" id="inlineRadio1" value="Present" required>
                                                <label class="form-check-label" for="inlineRadio1">Present</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="attendance" id="inlineRadio2" value="Absent" required>
                                                <label class="form-check-label" for="inlineRadio2">Absent</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1">Time</span>
                                    <input type="text" class="form-control" placeholder="<?php echo date('h:i:s a'); ?>" name="time" aria-label="Time" aria-describedby="basic-addon1" value="<?php echo date('h:i:sa'); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg mb-3 mb-lg-3">
                                <button type="submit" name="submit" class="btn btn-success mx-3 mx-lg-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



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

                            <table class="table text-light">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Attendance</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $slct_qry = "SELECT * FROM tbl_attendance";
                                    $res1 = mysqli_query($con, $slct_qry);
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($res1)) {
                                    ?>
                                        <tr class="">
                                            <td scope="row"><?php echo $i; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['attendance']; ?></td>
                                            <td><?php echo $row['time']; ?></td>
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
require("footer.php");
if (isset($_POST['submit'])) {
    echo $studentname = $_POST['studentname'];
    echo $date = $_POST['date'];
    echo $attendance = $_POST['attendance'];
    echo $time = $_POST['time'];


    $insert_query = "INSERT INTO `tbl_attendance`(`email`, `date`, `attendance`, `time`, `doa`) VALUES ('$studentname','$date','$attendance','$time',now())";

    if (mysqli_query($con, $insert_query)) {
        echo '
        <script>
        alert("Attendance recorded successfully!")
        window.location.href="attendence.php";
        </script>
        ';
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

?>