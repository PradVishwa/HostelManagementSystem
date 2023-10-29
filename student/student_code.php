<?php
include('../dbcon.php');

// for login 
if (isset($_POST['stu_log'])) {
    
   echo  $email = $_POST['email'];
    echo $password = $_POST['password'];

    $query = "SELECT * FROM tbl_student WHERE email='$email' ";
    $result = mysqli_query($con, $query);
    //  echo mysqli_num_rows($result);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);

            if($result_fetch['is_verified']==1&& $result_fetch['status']=="alloted" ){

                if ( $password == $result_fetch['password']) {
                // if (password_verify($pass, $result_fetch['password'])) {
                    // if Password match 
                    // echo "Right";
                    $_SESSION['logged_in'] = true;
                    $_SESSION['appli_no'] = $result_fetch['appli_no'];
                     $_SESSION['name'] = $result_fetch['name'];
                     $_SESSION['student'] = $result_fetch['email'];
                    header("location:dashboard.php");
                } 
                else{
                    // if password incorrect 
                    echo "
                        <script>
                            alert('Incorrect Password');
                            window.location.href='index.php';
                        </script>
                    ";
                }
            }
            else{

                echo "
                    <script>
                        alert('Email Not Verified/ Hostel Not alloted');
                        window.location.href='index.php';
                    </script>
                ";
            }

        } else {
            echo "
                <script>
                    alert('Email Not Registered');
                    window.location.href='index.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Can not Run Query 1');
                 window.location.href='index.php';
            </script>
        ";
    }
}

















// if (isset($_POST['stu_log'])) {
//     // echo $email . "<br>" . $password;
//     $query = "SELECT * FROM `tbl_student` WHERE email='$email'";
//     $res = mysqli_query($con, $query);
//     if ($res) {
//         $result_fetch = mysqli_fetch_assoc($res);

//         if ($password == $result_fetch['password'] && $email == $result_fetch['email']) {
//             $_SESSION['student'] = $email;

//             header("location:dashboard.php");
//         } else {
//             // if password incorrect 
//             echo "
//                     <script>
//                         alert('Incorrect email or password');
//                         window.location.href='index.php';
//                     </script>
//                 ";
//         }

//     } else {
//         echo "
//             <script>
//                 alert('Can not Run Query 1');
//                 // window.location.href='index.php';
//             </script>
//         ";
//     }
// }

   ?> 