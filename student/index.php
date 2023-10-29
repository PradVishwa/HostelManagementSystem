<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel - Government Polytechnic Aadampur Tarabganj Gonda</title>
    <!-- favicon icon  -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- bootstrap css  -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- swipper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href=./assets/css/swiper-bundle.min.css"> -->
    <!-- awesome font icon css  -->
    <!-- <link rel="stylesheet" href=./assets/css/awesome_font_icon.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
	<body>
        <div class="section-login py-5 bg-light">
            <div class="container">
                <div class="row login">
                    <div class="col-lg-5 p-0">
                        <img src="../assets/img/gallery/5.webp" class="img-fluid w-100 h-100" alt=""  >
                    </div>
                    <div class="col-lg-7 text-center py-5 ">
                        <img src="../assets/img/hOstel-logo.png" alt="" class="">
                        <h1>Student Login</h1>

                        <form action="student_code.php" method="post">
                            <div class="form-row py-2 pt-5 ">
                                <div class=" offset-1 col-lg-10">
                                    <input type="email" placeholder="Email" name="email" class="inp text-center">
                                </div>
    
                            </div>
                            <div class="form-row py-2">
                                <div class=" offset-1 col-lg-10">
                                    <input type="password" placeholder="Password" name="password" class="inp text-center">      
                                </div>
    
                            </div>
                            <div class="form-row py-2">
                                <div class=" offset-1 col-lg-10">
                                    <input type="submit" name="stu_log" value="Login " class="bt1">
                                </div>
    
                            </div>
                            <a href="../index.php">Back to home</a>
                        </form>
                        
                </div>
                
            </div>
        </div>
    </body>
    </html>

