<?php
require("../admin/header.php");
require("menu.php");
require("../dbcon.php");

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Attendence</span>
        </div>
        <div class="profile-details">
            <div class="dropdown">
            <a class="btn btn-primary" href="dashboard.php">
            Go to Back
          </a>
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
                                        $query = "SELECT * FROM `tbl_student`where status='alloted' order by name";
                                        $res = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                            <!-- <option value="mp">No</option> -->
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                    <span class="input-group-text" id="basic-addon1">@</span>
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
                                    $slct_qry="SELECT * FROM tbl_attendance";
                                    $res1=mysqli_query($con, $slct_qry);
                                     $i = 1;
                                    while ($row = mysqli_fetch_array($res1)) {
                                        $email=$row['email'];
                               ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $i;?></td>
                                        <td><?php $query="select * from tbl_student where email='$email'";
                                        $name=mysqli_query($con, $query);
                                        $row2= mysqli_fetch_array($name);
                                        echo $row2['name'];
                                        ?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['attendance'];?></td>
                                        <td><?php echo $row['time'];?></td>
                                    </tr>
                                <?php
                                    $i++; 
                                }?>
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
    $studentname=$_POST['studentname'];
    $date=$_POST['date'];
    $attendance=$_POST['attendance'];
    $time=$_POST['time'];

    $insert_query="INSERT INTO `tbl_attendance`(`name`, `date`, `attendance`,`time`, `doa`) VALUES ('$studentname','$date','$attendance','$time',now())";

    if(mysqli_query($con, $insert_query)){
		echo '
        <script>
        alert("Attendance recorded successfully!")
        </script>
        ';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    
}
require("../admin/footer.php");

?>