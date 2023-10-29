<?php
require('../dbcon.php');
$query="select sum(amount) as amount_sum from tbl_fee";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$query1="select count(req_id) as totalstudent from tbl_student where status='alloted'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
$query2="select count(room_no) as totalroom from tbl_alloted_room";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);
// echo $_SESSION['admin'];
if ($_SESSION['admin'] == "") {
  echo "
        <script>
            alert('Access Denide');
            window.location.href='index.php';
        </script>
    ";
} else {
 

  include("header.php");
  include("dashbord_menu.php");
?>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
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
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Student</div>
              <div class="number"><?php echo $row1['totalstudent'];?></div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <!-- <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <i class='bx bx-user cart'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Rooms</div>
              <div class="number"><?php echo $row2['totalroom'];?></div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <!-- <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <i class='bx bxs-home cart two'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Amount</div>
              <div class="number">₹<?php echo $row['amount_sum'];?></div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <!-- <span class="text">Up from yesterday</span> -->
              </div>
            </div>
            <i class='bx bx-rupee cart three'></i>
          </div>
          <!-- <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Return</div>
              <div class="number">11,086</div>
              <div class="indicator">
                <i class='bx bx-down-arrow-alt down'></i>
                <span class="text">Down From Today</span>
              </div>
            </div>
            <i class='bx bxs-cart-download cart four'></i>
          </div> -->
        </div>

        <!-- <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Sales</div>
            <div class="sales-details">
              <ul class="details">
                <li class="topic">Date</li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Customer</li>
                <li><a href="#">Alex Doe</a></li>
                <li><a href="#">David Mart</a></li>
                <li><a href="#">Roe Parter</a></li>
                <li><a href="#">Diana Penty</a></li>
                <li><a href="#">Martin Paw</a></li>
                <li><a href="#">Doe Alex</a></li>
                <li><a href="#">Aiana Lexa</a></li>
                <li><a href="#">Rexel Mags</a></li>
                <li><a href="#">Tiana Loths</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Sales</li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Delivered</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Total</li>
                <li><a href="#">$204.98</a></li>
                <li><a href="#">$24.55</a></li>
                <li><a href="#">$25.88</a></li>
                <li><a href="#">$170.66</a></li>
                <li><a href="#">$56.56</a></li>
                <li><a href="#">$44.95</a></li>
                <li><a href="#">$67.33</a></li>
                <li><a href="#">$23.53</a></li>
                <li><a href="#">$46.52</a></li>
              </ul>
            </div>
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title">Top Seling Product</div>
            <ul class="top-sales-details">
              <li>
                <a href="#">
                  <img src="../assets/images/sunglasses.jpg" alt="">
                  <span class="product">Vuitton Sunglasses</span>
                </a>
                <span class="price">$1107</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/jeans.jpg" alt="">
                  <span class="product">Hourglass Jeans </span>
                </a>
                <span class="price">$1567</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/nike.jpg" alt="">
                  <span class="product">Nike Sport Shoe</span>
                </a>
                <span class="price">$1234</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/scarves.jpg" alt="">
                  <span class="product">Hermes Silk Scarves.</span>
                </a>
                <span class="price">$2312</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/blueBag.jpg" alt="">
                  <span class="product">Succi Ladies Bag</span>
                </a>
                <span class="price">$1456</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/bag.jpg" alt="">
                  <span class="product">Gucci Womens's Bags</span>
                </a>
                <span class="price">$2345</span>
              <li>
                <a href="#">
                  <img src="../assets/images/addidas.jpg" alt="">
                  <span class="product">Addidas Running Shoe</span>
                </a>
                <span class="price">$2345</span>
              </li>
              <li>
                <a href="#">
                  <img src="../assets/images/shirt.jpg" alt="">
                  <span class="product">Bilack Wear's Shirt</span>
                </a>
                <span class="price">$1245</span>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </section>
<?php
require("footer.php");

} ?>