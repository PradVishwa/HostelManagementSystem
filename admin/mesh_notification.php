<?php
require("../dbcon.php");
require("header.php");
require("dashbord_menu.php");

$slct_qry = "SELECT * FROM tbl_mesh_notification";
$res = mysqli_query($con,$slct_qry);

?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Mess Notification</span>
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

                        <h3 class="card-title text-light ">Mess Notification</h3>
                        <form action="" method="post">
                            
                            <div class="col-lg mb-3 mb-lg-3 input-group">
                                <span class="input-group-text" id="basic-addon1"><i class='bx bx-bell-plus'></i></span>
                                <textarea name="notification" class="form-control" placeholder="Enter Mesh Notification"></textarea>
                            </div>
                            <div class="col-lg mb-3 mb-lg-3">
                                <button type="submit" name="mesh_noti" class="btn btn-success mx-3 mx-lg-5">Add Notification</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="row mx-0" >
                <div class="col-lg text-center " style="border-top: 2px solid #caa169;">
                    <div class="card-body  ">
                <h3 class="card-title text-light ">Notification's</h3>
                <div class="table-responsive">
                    
                    <table class="table text-light">
                        <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Notification</th>
                                    <th>Date</th>
                                    <!-- <th>Remove</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    while($row = mysqli_fetch_array($res)){
                                ?>
                                <tr class="">
                                    <td scope="row"><?php echo $i;?></td>
                                    <td><?php echo $row['notification'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <!-- <td><a href="">remove</a></td> -->
                                    
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
    </div>
</section>
<?php
require("footer.php");
if (isset($_POST['mesh_noti'])) {
    $notification = $_POST['notification'];
    $query = "INSERT INTO `tbl_mesh_notification`(`notification`, `date`) VALUES ('$notification',now())";
    if(mysqli_query($con,$query)) {
        echo "
        <script>
            alert('Notification Inserted Successfull');
            window.location.href='mesh_notification.php';
        </script>
        
    ";}else {
        echo "
        <script>
            alert('Server Down');
            window.location.href='mesh_notification.php';
        </script>
    ";
    }
    
    
}


?>