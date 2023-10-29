<?php
    require("../dbcon.php");
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
    <!-- <link rel="stylesheet" href=."assets/css/swiper-bundle.min.css"> -->
    <!-- awesome font icon css  -->
    <!-- <link rel="stylesheet" href=."assets/css/awesome_font_icon.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
	<body>
        <div class="section-login py-5 bg-light mx-auto">
            <div class="container ">
                <div class="row login">
                    <div class="col-lg-5 p-0">
                        <img src="../assets/img/gallery/5.webp" class="img-fluid w-100 h-100" alt=""  >
                    </div>
                    <div class="col-lg-7 text-center py-5 ">
                        <img src="../assets/img/hOstel-logo.png" alt="" class="img-fluid w-50">
                        <h1>Admin Login</h1>

                        <form  method="post">
                            <div class="form-row py-2 pt-5">
                                <div class=" offset-1 col-lg-10">
                                    <input type="email" placeholder="Enter Email/Id" name="email" class="inp text-center">
                                </div>
    
                            </div>
                            <div class="form-row py-2">
                                <div class=" offset-1 col-lg-10">
                                    <input type="password" placeholder="Password" name="password" class="inp text-center">      
                                </div>
    
                            </div>
                            <div class="form-row py-2">
                                <div class=" offset-1 col-lg-10">
                                    <input type="submit" value="Login" name="login" class="bt1">
                                </div>
    
                            </div>
                            <a href="../index.php">Back to home</a>
                        </form>
                        
                </div>
                
            </div>
        </div>
    </body>
    </html>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo $email . "<br>" . $password;
    $query = "SELECT * FROM `tbl_admin` WHERE id='1'";
    $res=mysqli_query($con,$query);
    if ($res) {
            $result_fetch = mysqli_fetch_assoc($res);

            if ( $password == $result_fetch['password'] && $email == $result_fetch['email']) {
                $_SESSION['admin'] = $email;

                header("location:dashbord.php");
            } 
            else{
                // if password incorrect 
                echo "
                    <script>
                        alert('Incorrect email or password');
                        window.location.href='index.php';
                    </script>
                ";
            }

    } else {
        echo "
            <script>
                alert('Can not Run Query 1');
                // window.location.href='index.php';
            </script>
        ";
    }
}
?>

