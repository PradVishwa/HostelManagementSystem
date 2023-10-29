<?php
require("dbcon.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel - Government Polytechnic Aadampur Tarabganj Gonda</title>
    <!-- favicon icon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- bootstrap css  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- swipper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- awesome font icon css  -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <div class="container-fluid " style="border-bottom: 2px solid #caa169;">
        <div class="row text-center ">
            <div class="col-lg my-auto ">
                <img src="./assets/img/collage-logo.png" alt="" style="height: 65px; width: 55px;">
            </div>
            <div class="col-lg my-auto ">
                <h5>Government Polytechnic Aadampur Tarabganj Gonda</h5>
            </div>
            <div class="col-lg my-auto  ">
                <h5><a href="mailto:myprojectforcollege@gmail.com" style="color: #021832;" class="text-end"><i class="fa fa-envelope"></i> gpaadampur@gmail.com</a></h5>

            </div>
        </div>
    </div>
    <!-- navbar start  -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <img src="assets/img/hOstel.png" alt="logo" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <i class="fa-regular fa-bars-staggered navbar-toggler-icon "></i> -->
                    <i class="fa-solid fa-bars-staggered navbar-toggler"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Facility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Functionaries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class=" nav-item ">
                            <!-- Login Button trigger modal -->
                            <a type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#login">
                                Login
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content ">
                                        <div class="modal-header" style="border-bottom: 2px solid #caa169;">
                                            <h3 class="modal-title fs-5" id="loginLabel">Login</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body" style="border-bottom: 2px solid #caa169;">

                                            <div class="col-lg mb-3 mb-lg-3 input-group">
                                                <span class="input-group-text" style="background:#caa169" id="basic-addon1"><i class='fa fa-user'></i></span>
                                                <a class="main-btn  dropdown-toggle form-control" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    --Select--
                                                </a>

                                                <ul class="dropdown-menu w-100 text-center ">
                                                    <li><a class="dropdown-item" href="./admin/index.php">Warden</a></li>
                                                    <li><a class="dropdown-item" href="./student/index.php">Student</a></li>
                                                    <li><a class="dropdown-item" href="./member/index.php">Hostel Member</a></li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="submit" name="login" class="main-btn">Login</button> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" nav-item ">
                            <!-- Status Button trigger modal -->
                            <!-- <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#status">Status</a> -->
                            <!-- Modal -->
                            <div class="modal fade" id="status" tabindex="-1" aria-labelledby="statusLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border-bottom: 2px solid #caa169;">
                                            <h3 class="modal-title fs-5" id="loginLabel">Status</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="code.php" method="post">

                                            <div class="modal-body" style="border-bottom: 2px solid #caa169;">
                                                <div class="col-lg mb-3 mb-lg-3 input-group">
                                                    <span class="input-group-text" id="basic-addon1"><i class='fa fa-envelope'></i>/<i class='fa fa-mobile'></i></span>
                                                    <input type="text" name="email_mobile" class="form-control" required placeholder="Email/Mobile No.">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="check_status" class="main-btn">Check Status</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mt-3 mt-lg-0">
                            <!-- Request Button trigger modal -->
                            <a class="main-btn" type="button" data-bs-toggle="modal" data-bs-target="#request">Request</a>
                            <!-- Modal -->
                            <div class="modal fade" id="request" tabindex="-1" aria-labelledby="requestLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border-bottom: 2px solid #caa169;">
                                            <h3 class="modal-title fs-5" id="loginLabel">Request Hostel</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="code.php" class="form-group" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body" style="border-bottom: 2px solid #caa169;">
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-clipboard'></i></span>
                                                        <input type="number" name="appli_no" class="form-control" required placeholder="Application Number" maxlength="12">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-clipboard-user'></i></span>
                                                        <input type="text" name="roll_no" class="form-control" required placeholder="Roll Number">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-street-view"></i></span>
                                                        <input type="number" name="dist" class="form-control" required placeholder="Enter Distance">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-code-branch'></i></span>
                                                        <select name="branch" class="form-control">
                                                            <option value="">--Select--</option>
                                                            <option value="CSE">Computer Science & Engineering</option>
                                                            <option value="mp">Mechanical Engineering (Production)</option>
                                                            <option value="ma">Mechanical Engineering (Automobile)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-user'></i></span>
                                                        <input type="text" name="name" class="form-control" required placeholder="Student Name">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-user-tie'></i></span>
                                                        <input type="text" name="fname" class="form-control" required placeholder="Father's Name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-user-nurse'></i></span>
                                                        <input type="text" name="mname" class="form-control" required placeholder="Mother's Name">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-id-card'></i></span>
                                                        <input type="number" name="aadhar" class="form-control" required placeholder="Aadhar Number">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-calendar-day'></i></span>
                                                        <input type="date" name="dob" class="form-control" required placeholder="Enter DOB">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group my-auto">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-venus-mars'></i></span>&nbsp;
                                                        <input type="radio" name="gender" value="female"> &nbsp; Female &nbsp;
                                                        <input type="radio" name="gender" value="male">&nbsp; Male
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-phone'></i></span>
                                                        <input type="number" name="mobile" class="form-control" required placeholder="Enter Mobile No." minlength="8" maxlength="10">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-envelope'></i></span>
                                                        <input type="email" name="email" class="form-control" required placeholder="Enter Email Address">
                                                        <input type="hidden" name="password" value="$%^&&$%^hostel">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-ranking-star'></i></span>
                                                        <input type="number" name="rank" class="form-control" required placeholder="Enter Genral Rank">
                                                    </div>
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-question'></i></span>
                                                        <input type="number" name="obt_mark" class="form-control" required placeholder="Enter Obtained Mark">
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-location-dot'></i></span>
                                                        <textarea name="address" class="form-control" required placeholder="Enter Address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="pe-3 ">Photo Upload</span>
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-image'></i></span>
                                                        <input type="file" name="stu_pic" id="fileInput" class="form-control" accept=".jpg">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg mb-3 mb-lg-3 input-group">
                                                        <span class="pe-3 text-center">Rank Card Upload</span>
                                                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-file-pdf'></i></span>
                                                        <input type="file" name="rank_card" class="form-control" accept=".pdf">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="main-btn" name="request">Request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- navbar exit  -->

    <!-- Banner Section  -->
    <section id="home" class="banner_wrapper p-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/img/slider/slider1.jpg');">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>Welcome To Hostel</h1>
                            <p><b style="color:#caa169;"> Government Polytechnic Aadampur Tarabganj Gonda</b>
                                <br> incidunt, autem necessitatibus omnis aspernatur corrupti nam m
                                mollitia natus voluptate quo. Suscipit?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('./assets/img/slider/slider2.jpg');">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>Welcome To Hostel</h1>
                            <p><b style="color:#caa169;"> Government Polytechnic Aadampur Tarabganj Gonda</b>
                                <br> incidunt, autem necessitatibus omnis aspernatur corrupti nam m
                                mollitia natus voluptate quo. Suscipit?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="container booking-area">
            <form action="distance.php" method="POST" class="row ">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <h5>You are eligible/not eligible :
                        <?php
                        echo '<span style="color:#caa169;">' . $status = $_SESSION['status'] . '</span>';
                        // session_destroy();
                        ?>
                    </h5>
                </div>
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <input id="searchMapInput" class="form-control" type="number" name="location" required placeholder="Enter Distance in KM">
                    
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <button type="submit" name="cal" class="main-btn rounded-2 px-lg-3">Check eligibility</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Banner Section exit  -->

    <!-- about section  -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3>Welcome to <span>Hostel<br class="d-none d-lg-block">Your Home</span> Away From Home!</h3>
                    <p>A hostel is a budget accommodation option that typically offers shared rooms, dormitories, or private rooms for travelers. Hostels often provide basic amenities like beds, bathrooms, lockers, and communal spaces like a kitchen, lounge, or game room. Some hostels may also offer additional services like laundry facilities, bike rentals, and tour bookings.</p>
                    <p>Hostels are a popular choice for budget-conscious travelers, backpackers, and students who want to save money on accommodation costs while exploring new places. Hostels are also known for their social atmosphere, where travelers from all over the world can meet, socialize, and exchange travel tips and stories.</p>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="main-btn mt-4" data-bs-toggle="modal" data-bs-target="#exploreModal">
                        Explore
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exploreModal" tabindex="-1" aria-labelledby="exploreModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="exploreModalLabel">Hostel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>"Unlock Your Potential in the Ultimate Student Haven!"</li>
                                        <li>"Creating a Nurturing Space for Student Success!"</li>
                                        <li>"Experience Comfort, Community, and Academic Excellence!"</li>
                                        <li>"Your Path to Student Achievement Starts Here!"</li>
                                        <li>"Where Lifelong Friendships and Academic Growth Flourish!"</li>
                                        <li>"Fueling Dreams, Inspiring Futures: Your Student Oasis!"</li>
                                        <li>"Embrace the Journey of Learning and Adventure at Our Student Hostel!"</li>
                                        <li>"Where Students Thrive, Connect, and Excel!"</li>
                                        <li>"Affordable, Safe, and Supportive: Your Ideal Student Residence!"</li>
                                        <li>"Empowering Students to Reach New Heights: Welcome to Our Hostel!"</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
                    <img src="assets/img/about.webp" class="img-fluid" alt="about">
                </div>
            </div>
        </div>

    </section>
    <!-- about section end -->

    <!-- room section -->
    <section id="rooms" class="rooms_wrapper">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6> What I can do for you</h6>
                    <h3>Our Room's </h3>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-items">
                        <img src="assets/img/room/room1.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Big Rooms</h5>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam dolore id impedit magnam et accusantium atque excepturi maxime itaque neque.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">₹2500/ Year</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-items">
                        <img src="assets/img/room/room2.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Clean Rooms</h5>
                                <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ipsa doloribus nulla qui neque rem dolore sequi voluptas labore unde.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">₹2500/ Year</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="room-items">
                        <img src="assets/img/room/room3.webp" class="img-fluid">
                        <div class="room-item-wrap">
                            <div class="room-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Big Rooms</h5>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam error cumque aliquam laborum ratione distinctio quod aliquid doloremque dolore.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">₹2500/ Year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room section end -->

    <!-- servivce section -->
    <section class="services_wrapper" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>We Are Here For You</h6>
                    <h3>Our Facility's</h3>
                </div>
            </div>
            <div class="row align-items-center service-item-wrap">
                <div class="col-lg-7 p-lg-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="spa" role="tabpanel">
                            <img src="./assets/img/services/service1.webp" alt="Spa">
                        </div>
                        <div class="tab-pane fade" id="restaurent" role="tabpanel">
                            <img src="./assets/img/services/service2.webp" alt="Spa">

                        </div>
                        <div class="tab-pane fade" id="swimming" role="tabpanel">
                            <img src="./assets/img/services/service3.png" alt="Spa">

                        </div>
                        <div class="tab-pane fade" id="conference" role="tabpanel">
                            <img src="./assets/img/services/service6.webp" alt="Spa">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 position-relative">
                    <div class="service-menu-area">
                        <ul class="nav">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#spa">
                                    <span class="service-icon">
                                        <img src="./assets/img/services/service-icon1.webp" alt="">
                                    </span>
                                    <h5>Clean Hostel</h5>
                                    <p><span>Neet & clean hostel </span>luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#restaurent">
                                    <span class="service-icon">
                                        <img src="./assets/img/services/service-icon2.webp" alt="">
                                    </span>
                                    <h5>Dining Area</h5>
                                    <p><span>Restaurent </span>luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#swimming">
                                    <span class="service-icon">
                                        <img src="./assets/img/services/service-icon3.webp" alt="">
                                    </span>
                                    <h5>Playground</h5>
                                    <p><span>Playground </span>luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#conference">
                                    <span class="service-icon">
                                        <img src="./assets/img/services/service-icon3.webp" alt="">
                                    </span>
                                    <h5>Conference Room</h5>
                                    <p><span>Conference </span>luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter mt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count2"></span>+
                        </h1>
                        <p>Total Student</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count1"></span>+
                        </h1>
                        <p>New Register</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count3"></span>+
                        </h1>
                        <p>Hostel Student's</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count4"></span>+
                        </h1>
                        <p>Passed Students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Seaction Start -->
    <section id="team" class="team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>What I can do for you</h6>
                    <h3>Our Hostel Functionaries</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="assets/img/team/team1.jpg" alt="" />
                        <div class="team-info">
                            <h5>Mr.R.N.Dubey</h5>
                            <p>Girls Hostel Persident & HOD(CSE)</p>
                            <ul class="social-network">
                                <li>
                                    <a href="https://wa.me/919005538700" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:rajdwivedi44@gmail.com@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/rajnarain.dwivedi.5?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="assets/img/team/team2.jpg" alt="" />
                        <div class="team-info">
                            <h5>Dr.S.K.Verma</h5>
                            <p>Boy's Hostel Persident</p>
                            <ul class="social-network">
                                <li>
                                    <a href="https://api.whatsapp.com/send/?phone=9565104040" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:satendraverma@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com./satyendra.verma.503" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="assets/img/team/team3.jpg" alt="" />
                        <div class="team-info">
                            <h5>Mr.Himanshu Mishra</h5>
                            <p>Boy's Hostel Wardnar</p>
                            <ul class="social-network">
                            <li>
                                    <a href="https://api.whatsapp.com/send/?phone=6394790068" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:himanshutripathi@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/himanshu.tripathi.77736 " target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="assets/img/team/team_4.jpg" alt="" />
                        <div class="team-info">
                            <h5>Ms.Supriya Singh</h5>
                            <p>Girl's Hostel Wardnar</p>
                            <ul class="social-network">
                                <li>
                                    <a href="https://api.whatsapp.com/send/?phone=8353957821" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:supriyasingh@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/supriyasingh822/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Seaction End  -->

    <!-- Gallery Secction Start -->
    <section id="gallery" class="gallery_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best Picture of our Hostel</h6>
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./assets/img/gallery/1.jpg" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./assets/img/gallery/2.jpg" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./assets/img/gallery/3.webp" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./assets/img/gallery/4.webp" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./assets/img/gallery/5.webp" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./assets/img/gallery/6.webp" alt="" />
                    <div class="gallery-item-content"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Secction end -->

    <!-- Blog Start -->
    <section id="blog" class="blog_wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Say Hello to Our hostelers</h6>
                    <h3>Our Blog</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="./assets/img/blog/blog1.webp" alt="" />
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Boy's Hostel</h5>
                            <h6>By Admin - 01 Jan 2023</h6>
                            <p class="mt-2">
                                A boys' hostel is a residential facility designed to accommodate male students or individuals, providing them with accommodation, amenities, and a supportive living environment.
                            </p>

                            <!-- Button trigger modal -->
                            <button type="button" class="main-btn mt-2" data-bs-toggle="modal" data-bs-target="#boysHostel">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="boysHostel" tabindex="-1" aria-labelledby="boysHostelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="boysHostelLabel">About Boy's Hostel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">Boys' hostels usually have a variety of room configurations to suit different preferences and budgets. These may include shared rooms, where two or more students share a room, or individual rooms for those who prefer more privacy. The rooms are typically equipped with basic furniture such as beds, desks, chairs, and storage units, allowing students to comfortably study and relax in their living space.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="./assets/img/blog/blog2.webp" alt="" />
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Girl's Hostel</h5>
                            <h6>By Admin - 01 Jan 2023</h6>
                            <p class="mt-2">
                                A girls' hostel is a residential facility exclusively for female students or individuals, offering accommodation, facilities, and a supportive environment for their academic pursuits and personal development.
                            </p>

                            <!--About Girls Hostel Button trigger modal -->
                            <button type="button" class="main-btn mt-2" data-bs-toggle="modal" data-bs-target="#girlsHostel">
                                Read More
                            </button>

                            <!--About Girls Hostel Modal -->
                            <div class="modal fade" id="girlsHostel" tabindex="-1" aria-labelledby="girlsHostelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title fs-5" id="girlsHostelLabel">About Girl's Hostel</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <img src="" class="img-thumbnail w-50 " alt=""> -->
                                            <div class="card">
                                                <!-- <img src="./assets/img/room/room1.webp" class="card-img-top rounded mx-auto d-block w-50 " alt="..."> -->
                                                <div class="card-body">
                                                    <!-- <h5 class="card-title">Girls Hostel</h5> -->
                                                    <p class="card-text">A girls' hostel is a residential facility specifically designed to provide accommodation, safety, and support to female students or individuals pursuing their education or professional goals. These hostels play a vital role in creating a conducive environment for girls, promoting their personal growth, fostering a sense of community, and empowering them to thrive academically and socially. In this article, we will explore the various aspects of girls' hostels and their significance.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-partner-slider mt-5">
            <div class="container swiper our-partner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./assets/img/partners/bteup.png" alt="" height="100px" width="150px" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/img/partners/urise.png" alt="" height="100px" width="150px" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/img/partners/aicte.png" alt="" height="100px" width="150px" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/img/partners/ministry.png" alt="" height="100px" width="150px" />
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Footer Start -->
    <section id="footer" class="footer_wrapper mt-3 mt-md-0 pb-0">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h5>Hostel Address</h5>
                    <p class="ps-0 h4">
                        Government Polytechnic
                    </p>
                    <div class="contact-info">
                        <div class="list-unstyled">
                            <li>
                                <a href="https://www.google.com/maps?ll=26.925455,81.885952&z=13&t=m&hl=en&gl=IN&mapclient=embed&cid=8157931189557962239" target="_blank"><i class="fa fa-home me-3"></i>Aadampur Tarabganj Gonda</a>
                            </li>
                            <li>
                                <a href="tel:"><i class="fa fa-phone me-3"></i> 9874561235</a>
                            </li>
                            <li>
                                <a href="gpahostel@gmail.com"><i class="fa fa-envelope me-3"></i> gpahostel@gmail.com</a>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Useful Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="https://urise.up.gov.in/" target="_blank">URISE</a></li>
                        <li><a href="https://bteup.ac.in/" target="_blank">BTEUP</a></li>
                        <li><a href="https://jeecup.admissions.nic.in/" target="_blank">JEECUP</a></li>
                        <li><a href="https://www.aicte-india.org/" target="_blank">AICTE</a></li>
                        <li><a href="https://swayam.gov.in/" target="_blank">SWAYAM</a></li>
                        <li><a href="https://nad.gov.in/" target="_blank">NAD</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Quick Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#rooms">Rooms</a></li>
                        <li><a href="#services">Facility</a></li>
                        <li><a href="#team">Functionaries</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Location</h5>
                    <div class="form-group mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3078050255717!2d81.8833766745427!3d26.925454776639565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999f62995555555%3A0x7136cb31bfaea5ff!2sGovernment%20Polytechnic%20Aadampur%20Tarabganj%20Gonda!5e0!3m2!1sen!2sin!4v1687204223409!5m2!1sen!2sin" width="275" height="100" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-item-center p-0">
                        <li>
                            <a href="https://www.facebook.com/polytechnic.gov.in" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=919005538700" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="mailto:rajdwivedi44@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p> &copy;<a href="http://www.gpaadampur.in/" target="_blank">GPA Gonda</a> all right reserved</p>
        </div>
    </section>
    <!-- Footer End -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- swiper cdn js  -->

    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- google map apis  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDflq5iJrXIcKpeq0IzLQPQpOboX91lY&libraries=places" async defer></script>

    <!-- custom js  -->
    <script src="assets/js/main.js"></script>


    <script>
        // check Eligibility seet
        function initMap() {
            var input = document.getElementById('searchMapInput');

            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                document.getElementById('location-snap').value = place.formatted_address;
                document.getElementById('lat-span').value = place.geometry.location.lat();
                document.getElementById('lon-span').value = place.geometry.location.lng();
            });
        }
    </script>
    <script>
        const input = document.querySelector('input');
        input.addEventListener('change', () => {
            validateSize();
        })
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault(); // Prevents default HTML submission
            validateSize(); // Checks file size
            // Optionally add more validation functions
            alert("Uploading..."); // Add code to upload file here
        });

        function validateSize() {
            const file = document.querySelector('input').files[0];
            if (!file) {
                alert("Error: You need to select a file");
                throw new Error("No file");
            }
            const limit = 2000;
            const size = Math.round(file.size / 1024);
            if (size < limit) {
                alert(`File size OK: ${size} bytes`);
            } else {
                alert(`Error: File larger than 2MB (${(size/1000).toFixed(2)} MB)`);
                throw new Error(`File too large: ${size} bytes`);
            }
        }
    </script>

</body>

</html>